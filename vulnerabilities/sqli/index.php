<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REST API SQL Injection</title>

    <?php require(dirname(__FILE__)."../../../bootstrap.php") ?>

</head>
   <body>


		 <!-- Sidebar -->
	 <div id="wrapper">

		 <div class="col-md-3">
   <?php require(dirname(__FILE__)."../../../sidebar.php") ?>
</div>
        <!-- /#sidebar-wrapper -->

      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>REST API SQL Injection</h1>
                        <p>SQL injection is a security vulnerability in which an attacker is able to submit a database SQL command that is executed by a web application, exposing the back-end database. A SQL injection attack can occur when a web application utilizes user-supplied data without proper validation or encoding as part of a command or query.</p>
                      <p><b>Note:</b> If the REST API is exhibiting "Unable to connect to the database. mysql_error()", please edit the api.php file located under \dvws\vulnerabilities\sqli</p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/SQL_Injection" target="_blank">https://www.owasp.org/index.php/SQL_Injection</a></li>
		<li><a href="http://hiderefer.com/?http://php.net/manual/en/security.database.sql-injection.php" target="_blank">http://php.net/manual/en/security.database.sql-injection.php</a></li>
		</ul>

                <p> <br>The following REST service is vulnerable to SQL Injection.This REST Service retrives a user based on ID</p>

<p id="demo"></p>
								<script>
								var request = new XMLHttpRequest();
								request.onreadystatechange = function() {
							  if (request.readyState == 4 && request.status == 200) {
								          document.getElementById("demo").innerHTML = this.responseText;
								    }
								};
								request.open('GET', 'api.php/users/2', true);
								request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');  // Tells server that this call is made for ajax purposes.
								request.send(null);  // No data needs to be sent along with the request.
								</script>


<br><br>
								REST API URL: <a href="/<?php echo "$dir/vulnerabilities/sqli/api.php/users/2\">/dvws/vulnerabilities/sqli/api.php/users/2</a>"; ?>


   </body>

</html>
