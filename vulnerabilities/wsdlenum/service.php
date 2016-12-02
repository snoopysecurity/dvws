<?php
	require 'functions.php';
	require 'lib/nusoap.php';
	$server=new soap_server();
	//create WSDL
	$server->configureWSDL("DVWA Web Service ","dvwa:webservice");
	$server->register(
				"return_price",   //name of function
				array("name"=>'xsd:string'),	  //input
				array("return"=>"xsd:float")   //output
				);
	$server->register(
				"owasp_apitop10",   //name of function
				array("owaspid"=>'xsd:int'),	  //input
				array("return"=>"xsd:string")   //output
				);

	$server->register(
				"check_user_information",   //name of function
				array("username"=>'xsd:string'),	  //input
				array("return"=>'xsd:string')   //output
				);
	$server->register(
				"population",   //name of function
				array("value_one"=>'xsd:string'),	  //input
				array("return"=>"xsd:integer")   //output
				);

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>
