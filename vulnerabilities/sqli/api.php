
<?php

 
// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

// connect to the mysql database
// if you use the lamp, you must enter a password mysql server
// example password is left blank due to most pre configured stacks having blank passwords, you should change your password :)
$link = mysqli_connect('localhost', 'root', '', 'dvws'); 
mysqli_query($link, "SET NAMES 'utf8'");
//mysqli_set_charset('utf8');

// retrieve the table and key from the path
$table = array_shift($request);
$key = array_shift($request);


// escape the columns and values from the input object

 

// sqli vulnerability 
// create SQL based on HTTP method
switch ($method) {
  case 'GET':
    $sql = "select first_name,last_name from users WHERE id=" .$key. ""; break;
  case 'PUT':
    $sql = "update `$table` set $set where id=$key"; break;
  case 'POST':
    $sql = "insert into `$table` set $set"; break;
  case 'DELETE':
    $sql = "delete `$table` where id=$key"; break;
}
 
// excecute SQL statement

$dbselect=mysql_select_db("dvws");
$result = mysql_query($sql) or die(mysql_error());

 


 
// print results, insert id or affected row count
if ($method == 'GET') {
  if (!$key) echo '[';
  for ($i=0;$i<mysql_num_rows($result);$i++) {
    echo ($i>0?',':'').json_encode(mysql_fetch_object($result));
  }
  if (!$key) echo ']';
} elseif ($method == 'POST') {
  echo mysql_insert_id($link);
} else {
  echo mysql_affected_rows($link);
}
 

?>
