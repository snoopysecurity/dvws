<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cross Site Tracing (XST)</title>

    <?php require(dirname(__FILE__)."../../../bootstrap.php") ?>

</head>
   <body>

		 <!-- Sidebar -->
	 <div id="wrapper">

		 <div class="col-md-3">
   <?php require(dirname(__FILE__)."../../../sidebar.php") ?>
</div>

      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

    <h1>Cross Site Tracing (XST)</h1>

    <p> <br>The TRACE verb supported by most web servers can be manipulated to produce a Cross-Site Scripting attack that results in sending malicious JavaScript to the victim's browser. The TRACE verb is designed to echo a user's input and intended for debugging or testing a web server. Cross Site Tracing (XST) enables an attacker to steal the victim's session cookies even if the HTTP Only option is set. </p>

                        <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/Cross_Site_Tracing" target="_blank">https://www.owasp.org/index.php/Cross_Site_Tracing</a></li>
		<li><a href="http://hiderefer.com/?https://capec.mitre.org/data/definitions/107.html" target="_blank">https://capec.mitre.org/data/definitions/107.html<br></a></li>
		</ul>

    <h4><br>The NuSOAP Library service is vulnerable to a Cross-site scripting flaw: <br><br><br></h4>
  </div>

  <div id="game-frame-container">
    <div id="topbar"></div>
    <div class="example-controls">
      <span class="url">URL</span>
 <form action="<?php $_PHP_SELF ?>" method="POST">
      <?php echo "<input type=\"text\" name=\"name\" value=\"/$dir/vulnerabilities/wsdlenum/service.php/\" />"; ?>
     <input type="Submit" value="Go"/>
    </div>



  </body>
</html>


<?php
error_reporting(0);
$value = '890750684af1101a65f443f039c02951';             //sets a random cookie
setcookie("StealthiscookiewithXST", $value);

  if (isset( $_POST["name"]))
   {
	   $homepage = $_POST["name"];
	echo '<br><iframe class="game-frame" src="'.$homepage.'"height="450" width="950"></iframe>';   //loads the vulnerable page in an iframe

}
?>
