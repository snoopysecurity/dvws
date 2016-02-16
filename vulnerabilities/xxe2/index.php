<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML External Entity 2</title>

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
                        <h1>XML External Entity 2</h1>
                        <p>Many web and mobile applications rely on web services communication for client-server interaction.An XML External Entity attack is a type of attack against an application that parses XML input.</p>
                        <p>An XXE attack occurs when XML input containing a reference to an external entity is processed by a weakly configured XML parser. This attack may lead to the disclosure of confidential data, denial of service, port scanning from the perspective of the machine where the parser is located, and other system impacts.</p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing" target="_blank">https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing</a></li>
		<li><a href="http://hiderefer.com/?http://projects.webappsec.org/w/page/13247003/XML External Entities" target="_blank">http://projects.webappsec.org/w/page/13247003/XML External Entities</a></li>
		</ul>
                        <p><br>This XXE example processes and parses the entire request sent by the print greeting button.</p>
                                      
         <p><br><input type="button" onclick="loadDoc();" value="Print Greeting"></p>

<p id="demo"></p>
  
 <script>
function loadDoc() {
//create the xml payload for xml-rpc	
            var req_params;
            var greeting = "DVWS";
            req_params = "<uservalue>\n";
            req_params = req_params + "<value>"+ greeting + "</value>\n";
            req_params = req_params + "</uservalue>\n";
            
            	
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    xmlDoc = xhttp.responseText;
    txt = "";
    document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "server.php", true);
  //send the request
  xhttp.send(req_params);
}
</script> 
   </body>
   
</html>
