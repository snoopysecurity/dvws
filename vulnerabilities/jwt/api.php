<?php
error_reporting(0);
// uncomment the lines below when running in stand-alone mode:

// for token+session based authentication (see "login_token.html" + "login_token.php"):

 require 'auth.php';
 $auth = new PHP_API_AUTH(array(
 	'secret'=>'1234567890',
 ));
 if ($auth->executeCommand()) exit(0);
 if (empty($_SESSION['user'])) {
      header('HTTP/1.0 401 Unauthorized');
      exit(0);
 }


// placeholder for testing:
// echo 'Access granted!';
