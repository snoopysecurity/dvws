<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML Bomb Denial-of-Service</title>

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

    <h1>XML Bomb Denial-of-Service</h1>

    <p> XML bomb is a exponential entity expansion attack that targets XML parsers. An XML bomb attack occurs when a dangerous formed XML data are composed and sent with the intent of crashing a vulnerable server. <br><br> When the XML parser tries to process an XML bomb, the data feeds on itself and grows exponentially. If enough malicous XML is processed by the server, it can cause the server to crash.</p>

                        <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://cwe.mitre.org/data/definitions/776.html" target="_blank">https://cwe.mitre.org/data/definitions/776.html</a></li>
		<li><a href="http://hiderefer.com/?http://www.soapui.org/security-testing/security-scans/xml-bomb.html" target="_blank">http://www.soapui.org/security-testing/security-scans/xml-bomb.html</a></li>
		</ul>
    <p><br>The following form takes any XML data and parses the data into an array structure. </p>


            <form action="process.php" method="POST">
         <input type="text" name="name" value="<test>example</test>" />
         <input type="submit" />
      </form>

</html>
