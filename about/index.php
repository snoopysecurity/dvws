<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Setup Instructions</title>

    <!-- Bootstrap Core CSS -->
    <link href="/dvws/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dvws/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
 
 
 
 
 
                        <h1>About</h1>
                        
 <p>This application was created mainly due to the lack of practical environments available for hacking web services.  Vulnerable applications such as DVWA and Mutillidae focuses more on generic Web application vulnerabilities such as Cross-site Scripting and SQL Injection. Additionally, a Damn Vulnerable Web Services project was started by Kevin Johnson of Secure Ideas but I felt that the project lacks contributors and needs more vulnerabilities. Lastly, I have previously conducted many web service application tests always wanted a test-bed to test out payloads and scanners on web service attack vectors. Lastly, I am hoping to add more vulnerabilities focusing SAML, OAuth and OpenID based vulnerabilities in the near future.</p>                             
<p>I would also like thank the the following people
</p>
	<li>Robin Wood (@digininja)</li>
	<li>Kevin Johnson (@secureideas)</li>

<p>If you are looking for a walkthrough and explaination of all the vulnerablies found in dvws, it can be found <a href="/dvws/Attacking Damn Vulnerable Web Services.pdf">here</a></p>
                      
<p><br>Lastly, if you want to learn more about web services and play with more vulnerable applications, checkout the following</p>
<ul>
   <li><a href="https://www.youtube.com/watch?v=oPrrFNEasgE">Greg Patton -The API Assessment Primer (AppSecEU) 2015</a></li>
   <li><a href="https://www.owasp.org/index.php/REST_Security_Cheat_Sheet">OWASP REST Security Cheat Sheet</a></li>
   <li><a href="http://www.itsecgames.com/">bWAPP (vulnerable application)</a></li>
   <li><a href="https://sourceforge.net/projects/mutillidae/">OWASP Mutillidae II (vulnerable application)</a></li>
  <li><a href="https://github.com/s4n7h0/xvwa">XVWA (vulnerable application)</a></li>
    <li><a href="https://github.com/WebGoat/WebGoat">OWASP Webgoat 7 (vulnerable application)</a></li>
<ul>
