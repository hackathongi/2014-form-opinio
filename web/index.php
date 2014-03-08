<?php
    
	$URL_API = 'http://';
	$hash	 = isset($_GET['h']) ? $_GET['h'] : '';

	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	$lang = ($lang == 'ca' ? 'ca' : 'es'); //o ca o es :)
	
	$trads = include '../src/messages.php';	
	$trads = $trads[$lang];	 
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>

  <body>
  	<div class="container">
		<div id="dadesComanda">
		</div>
	</div>
    <div class="container">

      <form id="rateForm" class="form-signin" role="form" action="#" method="post">
        <h2 class="form-signin-heading"><?=$trads['h2.title']?></h2>
        
        <div class="form-group">
        <label><?=$trads['label.valoracio']?></label><br />
        	<span data-value="0" class="rating icon-face-0"></span>
        	<span data-value="1" class="rating icon-face-1"></span>
        	<span data-value="2" class="rating icon-face-2"></span>
        	<span data-value="3" class="rating icon-face-3"></span>
        	<span data-value="4" class="rating icon-face-4"></span>
        	<span data-value="5" class="rating icon-face-5"></span>
        	<input type="hidden" name="rating" id="rating-value"/>
        </div>

        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="<?=$trads['email.placeholder']?>" required autofocus>
        </div>
        
        <div class="form-group">
        <textarea  class="form-control" placeholder="<?=$trads['opinion.placeholder']?>" name="opinion" rows="4"></textarea>
        </div>
        
        <div class="form-group xarxes">
        	<div class="g-plus" data-action="share"></div>
        	<div class="fb-like" data-href="http://eshopopinion.com" data-width="300" data-send="true"></div>
        </div>
        
        <input type="hidden" name="hash" value ="<?=$hash?>"/>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><?=$trads['submit.caption']?></button>
      </form>
      



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery.validate.js"></script>
    <script src="vendor/jquery/jquery.confirm.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/mustache/mustache.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
		(function() {
		var element = document.createElement('script'); 
		element.type = "text/javascript"; 
		element.async = true;
		element.id = "facebook-jssdk"
		element.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
		var s = document.getElementsByTagName('script')[0]; 
		s.parentNode.insertBefore(element, s);
		})();
	</script>
			<!-- Inserta esta etiqueta después de la última etiqueta de compartir. -->
		<script type="text/javascript">
		  window.___gcfg = {lang: 'es'};
		
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
  </body>
</html>

