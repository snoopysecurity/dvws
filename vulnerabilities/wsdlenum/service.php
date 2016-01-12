<?php
	require 'functions.php';
	require 'lib/nusoap.php'; 
	$server=new soap_server(); 
	//create WSDL
	$server->configureWSDL("DVWA Web Service ","dvwa:webservice");
	$server->register(
				"Return_price",   //name of function
				array("name"=>'xsd:string'),	  //input
				array("return"=>"xsd:float")   //output
				);

	$server->register(
				"user_id",   //name of function
				array("username"=>'xsd:string'),	  //input
				array("return"=>'xsd:string')   //output
				);			
	$server->register(
				"Population",   //name of function
				array("value_one"=>'xsd:string'),	  //input
				array("return"=>"xsd:integer")   //output
				);					
				
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>  
