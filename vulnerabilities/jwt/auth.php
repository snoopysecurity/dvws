<?php
//var_dump($_SERVER['REQUEST_METHOD'],$_SERVER['PATH_INFO']); die();

class PHP_API_AUTH {

	public function __construct($config) {
		extract($config);

		$verb = isset($verb)?$verb:null;
		$path = isset($path)?$path:null;
		$username = isset($username)?$username:null;
		$password = isset($password)?$password:null;
		$token = isset($token)?$token:null;
		$authenticator = isset($authenticator)?$authenticator:null;

		$method = isset($method)?$method:null;
		$request = isset($request)?$request:null;
		$post = isset($post)?$post:null;

		$time = isset($time)?$time:null;
		$leeway = isset($leeway)?$leeway:null;
		$ttl = isset($ttl)?$ttl:null;
		$algorithm = isset($algorithm)?$algorithm:null;
		$secret = isset($secret)?$secret:null;

		// defaults
		if (!$verb) {
			$verb = 'POST';
		}
		if (!$path) {
			$path = '';
		}
		if (!$username) {
			$username = 'username';
		}
		if (!$password) {
			$password = 'password';
		}
		if (!$token) {
			$token = 'token';
		}

		if (!$method) {
			$method = $_SERVER['REQUEST_METHOD'];
		}
		if (!$request) {
			$request = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';
			if (!$request) {
				$request = isset($_SERVER['ORIG_PATH_INFO'])?$_SERVER['ORIG_PATH_INFO']:'';
			}
		}
		if (!$post) {
			$post = 'php://input';
		}

		if (!$time) {
			$time = time();
		}
		if (!$leeway) {
			$leeway = 5;
		}
		if (!$ttl) {
			$ttl = 30;
		}
		if (!$algorithm) {
			$algorithm = 'HS256';
		}

		$request = trim($request,'/');

		$this->settings = compact('verb', 'path', 'username', 'password', 'token', 'authenticator', 'method', 'request', 'post', 'time', 'leeway', 'ttl', 'algorithm', 'secret');
	}


	protected function retrieveInput($post) {
		$input = (object)array();
		$data = trim(file_get_contents($post));
		if (strlen($data)>0) {
			if ($data[0]=='{') {
				$input = json_decode($data);
			} else {
				parse_str($data, $input);
				$input = (object)$input;
			}
		}
		return $input;
	}

	protected function generateToken($claims,$time,$ttl,$algorithm,$secret) {
		$algorithms = array('HS256'=>'sha256','HS384'=>'sha384','HS512'=>'sha512');
		$header = array();
		$header['typ']='JWT';
		$header['alg']=$algorithm;
		$token = array();
		$token[0] = rtrim(strtr(base64_encode(json_encode((object)$header)),'+/','-_'),'=');
		$claims['iat'] = $time;
		$claims['exp'] = $time + $ttl;
		$token[1] = rtrim(strtr(base64_encode(json_encode((object)$claims)),'+/','-_'),'=');
		if (!isset($algorithms[$algorithm])) return false;
		$hmac = $algorithms[$algorithm];
		$signature = hash_hmac($hmac,"$token[0].$token[1]",$secret,true);
		$token[2] = rtrim(strtr(base64_encode($signature),'+/','-_'),'=');
		return implode('.',$token);
	}

	protected function getVerifiedClaims($token,$time,$leeway,$ttl,$algorithm,$secret) {
		$algorithms = array('HS256'=>'sha256','HS384'=>'sha384','HS512'=>'sha512');
		if (!isset($algorithms[$algorithm])) return false;
		$hmac = $algorithms[$algorithm];
		$token = explode('.',$token);
		if (count($token)<3) return false;
		$header = json_decode(base64_decode(strtr($token[0],'-_','+/')),true);
		if (!$secret) return false;
		if ($header['typ']!='JWT') return false;
		if ($header['alg']!=$algorithm) return false;
		$signature = bin2hex(base64_decode(strtr($token[2],'-_','+/')));
		if ($signature!=hash_hmac($hmac,"$token[0].$token[1]",$secret)) return false;
		$claims = json_decode(base64_decode(strtr($token[1],'-_','+/')),true);
		if (!$claims) return false;
		if (isset($claims['nbf']) && $time+$leeway<$claims['nbf']) return false;
		if (isset($claims['iat']) && $time+$leeway<$claims['iat']) return false;
		if (isset($claims['exp']) && $time-$leeway>$claims['exp']) return false;
		if (isset($claims['iat']) && !isset($claims['exp'])) {
			if ($time-$leeway>$claims['iat']+$ttl) return false;
		}
		return $claims;
	}

	public function executeCommand() {
		extract($this->settings);
		$no_session = $authenticator && $secret;
		if (!$no_session) {
			ini_set('session.cookie_httponly', 1);
			session_start();
			echo "If username is not shown the first time, please refresh the page.";

?>
			<head>

				 <meta charset="utf-8">
				 <meta http-equiv="X-UA-Compatible" content="IE=edge">
				 <meta name="viewport" content="width=device-width, initial-scale=1">
				 <meta name="description" content="">
				 <meta name="author" content="">

				 <title>User Area</title>

			 <?php require("".dirname(__FILE__)."../../../bootstrap.php") ?>

			 <body>

				 <!-- Sidebar -->
			 <div id="wrapper">
				 <div class="col-md-3">

			</div>

						<!-- /#sidebar-wrapper -->
<?php require(dirname(__FILE__)."../../../sidebar.php") ?>
					<div id="page-content-wrapper">
								<div class="container-fluid">
										<div class="row">
												<div class="col-lg-12">


			<?php echo "<h3>Access granted! Logged in as user ".$_SESSION['user']."!</h3>"; ?>
			<?php
			if ($_SESSION['user'] == 'admin') {
			 echo '<br> Successfully logged in as user \'admin\'. ';
			} elseif ($_SESSION['user'] == 'dvwsuser') {
				 echo '<br> Successfully logged in as user \'dvwsuser\'. Try to log in as the user \'admin\'';
			} else {
			 echo "<br> Not authenticated, Please log in again.";
			}
			?>

					<form method="post" action="<?php $_PHP_SELF ?>">
					<input type="submit" value="logout">

			 </body>
			 </html>

<?php

			if (!isset($_SESSION['csrf'])) {
				if (function_exists('random_int')) $_SESSION['csrf'] = random_int(0,PHP_INT_MAX);
				else $_SESSION['csrf'] = rand(0,PHP_INT_MAX);
			}
		}
		if ($method==$verb && trim($path,'/')==$request) {
			$input = $this->retrieveInput($post);
			if ($authenticator && isset($input->$username) && isset($input->$password)) {
				$authenticator($input->$username,$input->$password);
				if ($no_session) {
					echo json_encode($this->generateToken($_SESSION,$time,$ttl,$algorithm,$secret));
				} else {
					session_regenerate_id();
					echo $_SESSION['user'];
				}
			} elseif ($secret && isset($input->$token)) {
				$claims = $this->getVerifiedClaims($input->$token,$time,$leeway,$ttl,$algorithm,$secret);
				if ($claims) {
					foreach ($claims as $key=>$value) {
						$_SESSION[$key] = $value;
					}
					session_regenerate_id();

				}
			} else {
				if (!$no_session) {
					session_destroy();
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'login.php';
					header("Location: http://$host$uri/$extra");

				}
			}
			return true;
		}
		return false;
	}
}
