<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Same Origin Method Execution (SOME)</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <?php require(dirname(__FILE__)."../../../bootstrap.php") ?>
</head>
<body>


			 <!-- Sidebar -->
		 <div id="wrapper">

			 <div class="col-md-3">
	   <?php require(dirname(__FILE__)."../../../sidebar.php") ?>
	</div>
	        <!-- /#sidebar-wrapper -->

	      <div id="page-content-wrapper">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                        <h1>Same Origin Method Execution (SOME)</h1>
	                        <p>Same Origin Method Execution (SOME) is a vulnerability where an attacker can control a reflected function name that will be executed as Javascript.</p>

	                              <h2>More Information</h2>
		<ul>
			<li><a href="http://hiderefer.com/?http://www.benhayak.com/2015/06/same-origin-method-execution-some.html" target="_blank">http://www.benhayak.com/2015/06/same-origin-method-execution-some.html</a></li>
			<li><a href="http://hiderefer.com/?https://www.blackhat.com/docs/eu-14/materials/eu-14-Hayak-Same-Origin-Method-Execution-Exploiting-A-Callback-For-Same-Origin-Policy-Bypass-wp.pdf" target="_blank">https://www.blackhat.com/docs/eu-14/materials/eu-14-Hayak-Same-Origin-Method-Execution-Exploiting-A-Callback-For-Same-Origin-Policy-Bypass-wp.pdf</a></li>
			</ul>

<p>By leveraging the SOME vulnerability, it is possible for an attacker to trick a user nito visiting a malicious web-page which contains a link to the host’s web application API with a JSONP callback parameter which the attacker can then control. </p>

<input type="submit" id="callTocken" value="Request Token" />
<br><br>
<span id="output"></span>


<script type="text/javascript">

$('#callTocken').click(function(){
	 // callTocken();
     callTocken();
});


function callTocken(){

// http to send the request and pass some data
var url = "http://"
var str1 = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
var dir   = "<?php echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\')?>";
var str2 = "/token_generator.php?"
var url_a = url.concat(str1,dir,str2);


var dataObj = { param1: 'retrievetoken', param2: 'dvwsuser', param3: 'some'};

        $.ajax({
                url : url_a,
                dataType:"jsonp",
                jsonp:"mycallback",
                data: dataObj,
                success:function(data){

                    $('#output').html("Token: "+data.token+"<br>"+"Referer: "+data.referer+"<br>"+"SomeData: "+data.someData);

                },
                error:function(XMLHttpRequest){
                    // callback error
                    alert('callback error');
                }
            });
}
</script>


</body>
</html>
