<!DOCTYPE html>
<html lang="en">


	<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>XML External Entity</title>

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
                        <h1>XML External Entity Processing</h1>
                        <p>Many web and mobile applications rely on web services communication for client-server interaction.An XML External Entity attack is a type of attack against an application that parses XML input.</p>
                        <p>An XXE attack occurs when XML input containing a reference to an external entity is processed by a weakly configured XML parser. This attack may lead to the disclosure of confidential data, denial of service, port scanning from the perspective of the machine where the parser is located, and other system impacts.</p>
                              <h2>More Information</h2>
	<ul>
		<li><a href="http://hiderefer.com/?https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing" target="_blank">https://www.owasp.org/index.php/XML_External_Entity_(XXE)_Processing</a></li>
		<li><a href="http://hiderefer.com/?http://projects.webappsec.org/w/page/13247003/XML External Entities" target="_blank">http://projects.webappsec.org/w/page/13247003/XML External Entities</a></li>
		</ul>
                        <p><br>The following form will take an XML value and converts it into an object. Please enter your name below, inside the predefined XML tags.</p>




      <form action="<?php $_PHP_SELF ?>" method="POST">
         Name: <input type="text" name="name" value="<name></name>" />
         <input type="submit" />
      </form>

   </body>

 <?php



   if (isset( $_POST["name"]))
   {
      if (!preg_match("/<|>/",$_POST['name'] ))           //input validation
      {
         die ("Error converting XML value to object");
		}
		$xml=simplexml_load_string($_POST['name']);       //Interprets a string of XML into an object
		$yourname = ((string)$xml);
		print "<br><br> Hello $yourname";

      exit();
   }
?>
</html>
