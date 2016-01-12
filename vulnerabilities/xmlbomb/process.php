<!DOCTYPE html>
<html lang="en">
	
	
	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML External Entity</title>

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
                    <a href="#">
                        Dashboard
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
                </li>
            </ul>
            
        </div>
        <!-- /#sidebar-wrapper -->
        
      <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

    <h1>XML Bomb Denial-of-Service</h1>
    
    </html>
<?php

	$simple = $_POST['name'];
	$p = xml_parser_create();
	xml_parse_into_struct($p, $simple, $vals, $index);
	xml_parser_free($p);
	echo "<br><br>The following array was created from your XML data\n <br><br>";
	print_r($index);
	echo "\nVals array\n";
	print_r($vals);
	 get_server_memory_usage();
	 get_server_cpu_usage();
	

function get_server_memory_usage(){
    //shows server memory usage
    if (stristr(PHP_OS, 'Linux')) 
    {    
		$free = shell_exec('free');
		$free = (string)trim($free);
		$free_arr = explode("\n", $free);
		$mem = explode(" ", $free_arr[1]);
		$mem = array_filter($mem);
		$mem = array_merge($mem);
		$memory_usage = $mem[2]/$mem[1]*100;
		print "<br><br><br> The server memory usage is ".$memory_usage;
	}
	else
	{
	$cmd = 'typeperf  -sc 1  "\Processor(_Total)\% Processor Time"';
	exec($cmd, $lines, $retval);
	if($retval == 0) {
		$values = str_getcsv($lines[2]);
		print "<br><br><br> The server memory usage is ".floatval($values[1]);
	} else {
		return false;
	}
	}
}    
function get_server_cpu_usage(){
    //shows server CPU Usage
{
    $load=array();
    if (stristr(PHP_OS, 'win')) 
    {
    $output = array();
    exec( 'tasklist ', $output );
    foreach ($output as $value)
    {
        $ex=explode(" ",$value);
        $count_ex=count($ex);
        if (eregi(" ".getmypid()." Console",$value))
        {
            $memory_size=$ex[$count_ex-2]." Kb";
            print "<br><br>The server CPU usage is ".$memory_size;
        }
    } 
    } 
    else
    {
        $load = sys_getloadavg();
        print "<br><br>The server CPU usage is ".$load[0];
    }
    return $load;
}    

} 
?>
