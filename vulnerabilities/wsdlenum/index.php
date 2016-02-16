<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WSDL Enumeration</title>

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
                        <h1>WSDL Enumeration</h1>
                        <p>Most SOAP services are deployed to process requests given by a user through a web application. In common scenarios, the WSDL file is not exposed to the public.  However, if an attacker can access an application’s WSDL file, he can try to enumerate and and look for hidden services used by the web application.</p>
                        <p>WSDL enumeration aims to discover non-public web services by retrieving their WSDL file. </p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/Testing_WSDL_(OWASP-WS-002)" target="_blank">https://www.owasp.org/index.php/Testing_WSDL_(OWASP-WS-002)</a></li>
		<li><a href="http://hiderefer.com/?http://www.ws-attacks.org/index.php/WSDL_Disclosure" target="_blank">http://www.ws-attacks.org/index.php/WSDL_Disclosure</a></li>
		</ul>
                        <p>The below form submits a value to be processed by the back-end SOAP service. Try to scan the WSDL file and look for other requests being processed by the SOAP service.Click <a href="/dvws/vulnerabilities/wsdlenum/service.php?wsdl">here</a> to view the WSDL of the application.</p>
                                      
            
      

      <form action="<?php $_PHP_SELF ?>" method="POST">
<b>Smartphone OS Market Share</b><br>
  <input type="radio" name="name" value="Android">Android<br>
  <input type="radio" name="name" value="iOS">iOS<br>
  <input type="radio" name="name" value="Windows Phone">Windows Phone<br>
   <input type="radio" name="name" value="Others">Others<br><br>
  <input type="Submit" /><br>
      </form>
      
   </body>
   
   </html>
   
 <?php
    //create nusoap client
	require 'lib/nusoap.php'; 
	$client=new nusoap_client("http://127.0.0.1/dvws/vulnerabilities/wsdlenum/service.php?wsdl");
	 //send request to soap server
	 if (isset( $_POST["name"]))
		{
		  $book_name=$_POST['name'];
		  $response=$client->call('Return_price',array("name"=>"$book_name"));
		  if(empty($response))
		echo "Value not Found";
	else
		echo 'The percentage of '.$book_name.' marketshare is '.$response.'%';
		}
	 if (isset( $_POST["username"]))
		{
		  $id_value=$_POST['username'];
		  $response=$client->call('check_user_id',array("username"=>"$id_value"));
		  if(empty($response))
		echo "Value not Found";
	else
		echo $response;
		}
?>
