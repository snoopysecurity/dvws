<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cross-Origin Resource Sharing</title>

    <?php require("".dirname(__FILE__)."../../../bootstrap.php") ?>


</head>
   <body>

     <div id="wrapper">

  		 <div class="col-md-3">
       <?php require("".dirname(__FILE__)."../../../sidebar.php") ?>
  </div>

  <!-- /#sidebar-wrapper -->

<div id="page-content-wrapper">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <h1>Cross-Origin Resource Sharing</h1>
                  <p>Cross-Origin Resource Sharing (CORS) is a mechanism that allows restricted resources on a web page to be requested from another domain outside the domain from which the resource originated.</p>

                        <h2>More Information</h2>
<ul>
<li><a href="http://hiderefer.com/?https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS" target="_blank">https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS</a></li>
<li><a href="http://hiderefer.com/?http://blog.portswigger.net/2016/10/exploiting-cors-misconfigurations-for.html" target="_blank">http://blog.portswigger.net/2016/10/exploiting-cors-misconfigurations-for.html</a></li>
</ul>
                  <p><br>Having miscofigured cross-domain polcies can allow any third-party domain to perform two-way interaction to the vulnerable domain. While this configuration is not a always considered a vulnerability, it’s only recommended for sites which provide information that is not considered to be sensitive.<br></p>



<script type="text/javascript">

window.onload = doAjax();

function doAjax() {
    var uri = "http://"
    var str1 = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
    var str2   = "<?php echo rtrim(dirname($_SERVER['PHP_SELF']), '/\\');?>";
    var str3 = "/server.php"
    var url = uri.concat(str1,str2,str3);
    var request     = JSON.stringify({searchterm:"secretword:one"})
    var xmlhttp     = new XMLHttpRequest();

    xmlhttp.open("POST", url);
    xmlhttp.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xmlhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
    xmlhttp.setRequestHeader("Access-Control-Allow-Methods", "GET, POST, OPTIONS");
    xmlhttp.setRequestHeader("Access-Control-Allow-Headers", "Content-Type");
    xmlhttp.setRequestHeader("Access-Control-Request-Headers", "X-Requested-With, accept, content-type");

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var jsondata = JSON.parse(xmlhttp.responseText);
            document.getElementById("id02").innerHTML = jsondata.secretword;
        }
    };

    xmlhttp.send(request);
}

</script>

<p> The secret word is: <div id="id02"></div></p>



</body>

</html>
