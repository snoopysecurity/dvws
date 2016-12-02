

<?php

$referer = $_SERVER['HTTP_REFERER'];
// http that made the request

$srvip = '<form action="/dvws/instructions.php" method="post">
		<input name="create_db" type="submit" value="Reset DVWS Database">';


 $token = MD5(substr($_GET['mycallback'],6,-14));
 // jsonp callback keyword
 $callback = $_GET['mycallback'];

 $arr = array();
 $arr['someData'] = $_GET['param1'].' '.$_GET['param2'].' '.$_GET['param3']; 
 $arr['token'] = $token;
 $arr['referer'] = $referer;
 echo $callback.'(' . json_encode($arr) . ')';


?>
