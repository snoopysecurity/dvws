<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REST API SQL Injection</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" type="text/css" rel="stylesheet">

</head>
   <body>
	   
	   
    <div id="wrapper">

       <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="/dvws/index.html">
                        Home
                    </a>
                </li>
                <li><a href="/dvws/about/">About</a></li>
                <li><a href="/dvws/about/instructions.php">Setup instructions</a></li>
                <li><a href="/dvws/appinfo.php">PHP Information</a></li>
        
                                <li class="sidebar-brand">
                    <a href="/dvws/vulnerabilities/">
                        Vulnerabilities
                    </a>
                <li><a href="/dvws/vulnerabilities/wsdlenum/">WSDL Enumeration</a></li>
                <li><a href="/dvws/vulnerabilities/xmlbomb/xmlbomb.php">XML Bomb Denial-of-Service</a></li>
                <li><a href="/dvws/vulnerabilities/xxe/">XML External Entity Injection</a></li>
                <li><a href="/dvws/vulnerabilities/xpath/xpath.php">XPATH Injection</a></li>
                <li><a href="/dvws/vulnerabilities/cmdi/client.php">Command Injection</a></li>
                <li><a href="/dvws/vulnerabilities/xst/xst.php">Cross Site Tracing (XST)</a></li>
                <li><a href="/dvws/vulnerabilities/ssrf/">Server Side Request Forgery</a></li>
                <li><a href="/dvws/vulnerabilities/sqli/">REST API SQL Injection</a></li>
				   <li><a href="/dvws/vulnerabilities/xxe2/">XML External Entity Injection 2</a></li>
                
            </ul>
            
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
                     
                <p> <br>The following REST service is vulnerable to SQL Injection.</p>                         
                        
REST Service which retrives a user based on ID: <a href="/dvws/vulnerabilities/sqli/api.php/users/2">/dvws/vulnerabilities/sqli/api.php/users/2</a>


   </body>
   
</html>
