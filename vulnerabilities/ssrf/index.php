<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Server Side Request Forgery</title>

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
                        <h1>Server Side Request Forgery</h1>
                        <p>SSRF (also known as XPSA) usually occurs when a web application attempts to connect to user supplied URLs and does not validate backend responses received from the remote server. SSRF can be used by an attacker to port scan any internet facing servers and services by creating requests from the vulnerable server. <BR><br>Using SSRF, the vulnerable server can be used as a proxy to conduct port scanning of hosts in internal networks.</p>

                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://cwe.mitre.org/data/definitions/918.html" target="_blank">https://cwe.mitre.org/data/definitions/918.html</a></li>
		<li><a href="http://hiderefer.com/?http://niiconsulting.com/checkmate/2015/04/server-side-request-forgery-ssrf/" target="_blank">http://niiconsulting.com/checkmate/2015/04/server-side-request-forgery-ssrf/</a></li>
		</ul>
                     
                                      
                        
      
   
          <p><br>This function reads the first username from a stored text file. This is conducted through the usage of XML-RPC which uses XML to encode its calls and HTTP as a transport mechanism. <br><br> <input type="button" onclick="loadDoc();" value="Read Text File"></p>




<p id="demo"></p>
 
<script>
function loadDoc() {
//create the xml payload for xml-rpc	
            var req_params;
            req_params = "<\?xml version=\"1.0\" encoding=\"utf-8\"\?>\n";
            req_params = req_params + "<methodCall>\n";
            req_params = req_params + " <methodName>examples.stringecho</methodName>\n";
            req_params = req_params + " <params>\n";
            req_params = req_params + " <param>\n";
            req_params = req_params + " <value><string>usernames.txt</string></value>\n";
            req_params = req_params + " </param>\n";
            req_params = req_params + " </params>\n";
            req_params = req_params + " </methodCall>\n";
            
            	
  var xhttp, xmlDoc, txt, x, i;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (xhttp.readyState == 4 && xhttp.status == 200) {
    xmlDoc = xhttp.responseXML;
    txt = "";
    x = xmlDoc.getElementsByTagName("string");
    for (i = 0; i < x.length; i++) {
      txt = txt + x[i].childNodes[0].nodeValue + "<br>";
    }
    document.getElementById("demo").innerHTML = txt;
    }
  };
  xhttp.open("POST", "server.php", true);
  //send the request
  xhttp.send(req_params);
}
</script>
   </body>
   
</html>
