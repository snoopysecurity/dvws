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
				   <li><a href="/dvws/vulnerabilities/xxe2/">XML External Entity Injection 2</a></li>
                
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->
        
      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>XPATH Injection</h1>
                        <p>XPath Injection is an attack technique used to exploit applications that construct XPath (XML Path Language) queries from user-supplied input to query or navigate XML documents.</p>

                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?http://projects.webappsec.org/w/page/13247005/XPath%20Injection" target="_blank">http://projects.webappsec.org/w/page/13247005/XPath%20Injection</a></li>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/XPATH_Injection" target="_blank">https://www.owasp.org/index.php/XPATH_Injection</a></li>
		</ul>
                        <p><br> The below login form is using XPath to query an XML document and retrieve the account number of a user whose name and password are received from the browser.</p>
                                      
                   
    <form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="GET">

        <p><label for="login">User Login:</label><br />
        <input type="text" id="login" name="login" size="20" autocomplete="off" /></p>
        <p><label for="password">User Password:</label><br />
        <input type="password" id="password" name="password" size="20" autocomplete="off" /></p>
        <button type="submit" name="form" value="submit">Submit</button>

    </form>
   </body>
   
 <?php
 
 
if(isset($_REQUEST["login"]) & isset($_REQUEST["password"]))
{
//take values from the HTML form
    $login = $_REQUEST["login"];
    $password = $_REQUEST["password"];


    // Loads the XML file saved in the same directory
    $xml = simplexml_load_file("accountinfo.xml");

    // Executes the XPath search
    $result = $xml->xpath("/users/user[login='" . $login . "' and password='" . $password . "']");

    if($result)
    {

        $message =  "<br>Accepted User: <b>" . ucwords($result[0]->login) . "</b><br>Your Account Number: <b>" . $result[0]->accountd . "</b>";
        echo $message;
    }

    else
    {

        $message = "Your supplied credentials are invalid!";
	    echo $message;
    }
   }
?>
</html>
