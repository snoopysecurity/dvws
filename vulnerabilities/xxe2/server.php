<?php
// credits to ColeSec Security for original sample code
libxml_disable_entity_loader (false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$uservalue = simplexml_import_dom($dom);
$value = $uservalue->value;

print "Hello, Thankyou for using ".$value;
?>