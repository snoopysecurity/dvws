<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML External Entity</title>

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
                </li>
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->
        
      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>XML External Entity</h1>
                        <p>Many web and mobile applications rely on web services communication for client-server interaction.An XML External Entity attack is a type of attack against an application that parses XML input.</p>
                        <p>An XXE attack occurs when XML input containing a reference to an external entity is processed by a weakly configured XML parser. This attack may lead to the disclosure of confidential data, denial of service, port scanning from the perspective of the machine where the parser is located, and other system impacts.</p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing" target="_blank">https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing</a></li>
		<li><a href="http://hiderefer.com/?http://projects.webappsec.org/w/page/13247003/XML External Entities" target="_blank">http://projects.webappsec.org/w/page/13247003/XML External Entities</a></li>
		</ul>
                        <p><br>The following form will take an XML value and converts it into an object. Please enter your name below, inside the predefined XML tags.</p>
                                      
                        </p> 
      

      <form action="<?php $_PHP_SELF ?>" method="POST">
         Name: <input type="text" name="name" value="<name></name>" />
         <input type="submit" />
      </form>
      
   </body>
   
 <?php
 

 
   if (isset( $_POST["name"]))
   {
      if (!preg_match("/<|>/",$_POST['name'] ))           //input validation
      {
         die ("Error converting XML value to object");
		}
		$xml=simplexml_load_string($_POST['name']);       //Interprets a string of XML into an object 
		$yourname = ((string)$xml);
		print "<br><br> Hello $yourname";

      exit();
   }
?>
</html>
