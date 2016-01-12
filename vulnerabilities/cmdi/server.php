<?php
require_once 'jsonRPCServer.php';
require 'process.php';
require 'restrictedExample.php';

$myExample = new restrictedExample();
jsonRPCServer::handle($myExample)
	or print 'no request';
?>
