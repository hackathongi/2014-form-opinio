<?php
		$URL_API = 'http://';
		$hash	 = $_GET['h'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>eShopOpinion</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
<div id="dadesComanda">
</div>

    <div class="container">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Valoració</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email:</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="elteuemail@domini.cat" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
        <p>
        	<span data-value="1" class="rating">A</span>
        	<span data-value="2" class="rating">B</span>
        	<span data-value="3" class="rating">C</span>
        	<span data-value="4" class="rating">D</span>
        	<span data-value="5" class="rating">E</span>
        </p>
        <input type="hidden" name="rating" id="rating-value"/>
        <input  type="hidden" name="hash" value ="<?=$hash?>"/>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="opinion">Opinió</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="opinion" name="opinion">La teva opinió és important</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="envia"></label>
  <div class="col-md-4">
    <button id="envia" name="envia" class="btn btn-primary">Envia</button>
  </div>
</div>

</fieldset>
</form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../vendor/mustache/mustache.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>