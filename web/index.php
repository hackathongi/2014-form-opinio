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
    <link href="css/styles.css" rel="stylesheet">

  </head>

  <body>
<div id="dadesComanda">
</div>

    <div class="container">

      <form id="rateForm" class="form-signin" role="form" action="<?=$URL_API.'/sendRating'?>" method="post">
        <h2 class="form-signin-heading">Donans la teva opinió</h2>
         <div class="form-group">
        <label>¿Qué t'ha semblat el producte? </label>
        
        	<span data-value="1" class="rating icon-face-1"></span>
        	<span data-value="2" class="rating icon-face-2"></span>
        	<span data-value="3" class="rating icon-face-3"></span>
        	<span data-value="4" class="rating icon-face-4"></span>
        	<span data-value="5" class="rating icon-face-5"></span>
        
        </div>
        <input type="hidden" name="rating" id="rating-value"/>
        <input type="hidden" name="hash" value ="<?=$hash?>"/>
        <div class="form-group">
        <input type="email" class="form-control" placeholder="elteuemail@domini.cat" required autofocus>
        </div>
        <div class="form-group">
        <textarea  class="form-control" placeholder="Escriu aquí la teva opinió" name="opinion"></textarea>
        </div>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Envia</button>
      </form>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/jquery/jquery.validate.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../vendor/mustache/mustache.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

