<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WSDL Enumeration</title>

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
                        <h1>WSDL Enumeration</h1>
                        <p>Most SOAP services are deployed to process requests given by a user through a web application. In common scenarios, the WSDL file is not exposed to the public.  However, if an attacker can access an application’s WSDL file, he can try to enumerate and and look for hidden services used by the web application.</p>
                        <p>WSDL enumeration aims to discover non-public web services by retrieving their WSDL file. </p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/Testing_WSDL_(OWASP-WS-002)" target="_blank">https://www.owasp.org/index.php/Testing_WSDL_(OWASP-WS-002)</a></li>
		<li><a href="http://hiderefer.com/?http://www.ws-attacks.org/index.php/WSDL_Disclosure" target="_blank">http://www.ws-attacks.org/index.php/WSDL_Disclosure</a></li>
		</ul>
                        <p>The below form submits a value to be processed by the back-end SOAP service. Try to scan the WSDL file and look for other requests being processed by the SOAP service. To find the WSDL of the application, try spidering, directory bruteforcing and other enumeration methods.</p>

<!-- hint: WSDL file can be found here : ../vulnerabilities/wsdlenum/service.php?wsdl         -->


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
	$client=new nusoap_client("http://127.0.0.1/".$dir."/vulnerabilities/wsdlenum/service.php?wsdl");
	 //send request to soap server
	 if (isset( $_POST["name"]))
		{
		  $book_name=$_POST['name'];
		  $response=$client->call('return_price',array("name"=>"$book_name"));
		  if(empty($response))
		echo "Value not Found";
	else
		echo '<br> The percentage of '.$book_name.' marketshare is '.$response.'%';
		}
	 if (isset( $_POST["username"]))
		{
		  $id_value=$_POST['username'];
		  $response=$client->call('check_user_information',array("username"=>"$id_value"));
		  if(empty($response))
		echo "Value not Found";
	else
		echo $response;
		}
?>
