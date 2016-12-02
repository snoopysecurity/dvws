

<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JSON Web Token Secret Key Brute Force</title>

    <?php require("".dirname(__FILE__)."../../../bootstrap.php") ?>

</head>
   <body>

		 <!-- Sidebar -->
	 <div id="wrapper">

		 <div class="col-md-3">
     <?php require("".dirname(__FILE__)."../../../sidebar.php") ?>
</div>

        <!-- /#sidebar-wrapper -->

      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>JSON Web Token Brute Force</h1>
                        <p>JSON Web Token (JWT) is a JSON-based open standard (RFC 7519) for creating access tokens that assert some number of claims. For example, a server could generate a token that has the claim "logged in as admin" and provide that to a client. The client could then use that token to prove that he/she is logged in as admin. The tokens are signed by the server's key, so the server is able to verify that the token is legitimate. The tokens are designed to be compact, URL-safe and usable especially in web browser single sign-on (SSO) context.</p>
												<?php

											  ?>
												<img src="jwt_flow.png" style="width:550px;height:428px;">

                        <p><br>Username and Password accepted. Here is your JWT Token:<br></p>



<form method="post" action="api.php/">
<input name="token" value=
<?php
require 'auth.php';

$auth = new PHP_API_AUTH(array(
	'secret'=>'1234567890',
	'authenticator'=>function($user,$pass){ if ($user=='dvwsuser' && $pass=='password' || $user=='admin' && $pass=='adminpass$') $_SESSION['user']=$user; }

));


$auth->executeCommand();

if(empty($_POST['username']) && empty($_POST['password']) )
{
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'login.php';
	header("Location: http://$host$uri/$extra");
	header('Username and Password submitted: Null');
}

$userinfo = array(
                'dvwsuser'=>'password',
                'admin'=>'adminpass$'
                );

if($userinfo[$_POST['username']] !== $_POST['password']) {
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'login.php';
	header("Location: http://$host$uri/$extra");
	header('Username and Password submitted: Null');
} else {
							         //Invalid Login
}





?>

/>
<input type="submit" value="Submit JWT Token">
</form>
