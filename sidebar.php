
<link rel='shortcut icon' href='/<?php echo basename(__DIR__);?>/favicon.ico' type='image/x-icon'/ >


<?php $dir = basename(__DIR__); ?>

<!-- Sidebar -->
 <div id="sidebar-wrapper">
     <ul class="sidebar-nav">
         <li class="sidebar-brand">
             <a href="/<?php echo basename(__DIR__);?>/index.php">
                 Home
             </a>
         </li>
         <li><a href="/<?php echo basename(__DIR__);?>/about.php">About</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/instructions.php">Setup instructions</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/appinfo.php">PHP Information</a></li>

                         <li class="sidebar-brand">
             <a href="/<?php echo basename(__DIR__);?>/vulnerabilities/">
                 Vulnerabilities
             </a>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/wsdlenum/">WSDL Enumeration</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/xmlbomb/xmlbomb.php">XML Bomb Denial-of-Service</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/xxe/">XML External Entity Processing</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/xpath/xpath.php">XPATH Injection</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/cmdi/client.php">Command Injection</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/xst/xst.php">Cross Site Tracing (XST)</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/ssrf/">Server Side Request Forgery</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/sqli/">REST API SQL Injection</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/xxe2/">XML External Entity Processing 2</a></li>
         <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/jwt/login.php">JWT Secret Key Brute Force</a></li>
          <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/some/">Same Origin Method Execution</a></li>
          <li><a href="/<?php echo basename(__DIR__);?>/vulnerabilities/cors/client.php">Cross-Origin Resource Sharing</a></li>
     </ul>

 </div>
 <!-- /#sidebar-wrapper -->
