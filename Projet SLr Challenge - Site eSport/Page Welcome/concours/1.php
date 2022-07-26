<?php
	session_start();

	if (!isset($_SESSION['login'])){
		header("Location: index.php");
	} else {
		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta charset="utf-8">

		<title>SLr-Challenge | Concours !</title>

		<!-- Pour Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	

		<!-- Informations -->
		<meta name="mots" content="challenge, slr, esport, sport, jeux vidéos, tournois, ligues, welcome, abonnements">
		<meta name="description" content="La page de lancement du projet SLr-Challenge !">		
		<meta name="auteur" content="SLr">

		<!-- CSS -->
		<link href="../css/bootstrap.css" rel="stylesheet"> 
		<link href="../css/font-awesome.min.css" rel="stylesheet">	
		<link href="../css/flexslider.css" rel="stylesheet">
		<link href="../css/prettyPhoto.css" rel="stylesheet">
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link href="../css/animate.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet"> 	
		<link href="../css/responsive.css" rel="stylesheet"> 	
		<link rel="shortcut icon" type="image/png" href="img/favicon.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/icons/144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/icons/114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/icons/72x72.png">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>

<div class="animationload">
	<div class="loader"></div>
		</div>

	<header id="header">
			<div class="navbar navbar-fixed-top">
				<div class="container">

					<!-- Navbar -->
					<div class="navbar-header">

						<!-- Bouton -->
						<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-menu">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="../img/logo.png" alt="logo" role="banner" style="width: 140px;"></a>

					</div>

					<!-- Menu -->
					<nav id="navigation-menu" class="collapse navbar-collapse" role="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li><a id="GoToHome" class="selected-nav" href="../panel.php">Retour au panel</a></li>
						</ul>
					</nav>

				</div>

			</div>

		</header>
		
					<!-- Pour participer -->
		
						<!-- 1 -->
						
		<div id="statistic_banner" style="background-image: url(../img/background-concours.png); background-attachment: fixed !important; background-repeat: no-repeat; background-position: top center; background-size: cover; padding-top: 80px; padding-bottom: 80px;">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 titlebar">
							<h3>Etape 1</h3>
							<h2>Partagez !</h2>
						</div>
					</div>
					<div id="statistic-holder" class="row" style="height: 0">
						<div class="col-xs-3 col-sm-3 col-md-3 statistic-block animated bounceIn visible" data-animation="bounceIn" data-animation-delay="300">
							<img class="statistic-number" src="../img/socials/facebook.png" onmouseover="this.src='../img/socials/facebook-hover.png'" onmouseout="this.src='../img/socials/facebook.png'">
							<div class="statistic-text">Facebook</div>
						</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 statistic-block animated bounceIn visible" data-animation="bounceIn" data-animation-delay="400">
							<img class="statistic-number" src="../img/socials/twitter.png" onmouseover="this.src='../img/socials/twitter-hover.png'" onmouseout="this.src='../img/socials/twitter.png'">
							<div class="statistic-text">Twitter</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 statistic-block animated bounceIn visible" data-animation="bounceIn" data-animation-delay="500">
							<img class="statistic-number" src="../img/socials/google.png" onmouseover="this.src='../img/socials/google-hover.png'" onmouseout="this.src='../img/socials/google.png'">
							<div class="statistic-text">Google +</div>
						</div>
						<div class="col-xs-3 col-sm-3 col-md-3 statistic-block animated bounceIn visible" data-animation="bounceIn" data-animation-delay="600">
							<img class="statistic-number" src="../img/socials/web.png" onmouseover="this.src='../img/socials/web-hover.png'" onmouseout="this.src='../img/socials/web.png'">
							<div class="statistic-text">Sur votre site</div>
						</div>
					</div>
				</div>
			</div>
						
						<!-- 2 -->
						
			<div id="statistic_banner" style="background-image: url(../img/background-concours.png); background-attachment: fixed !important; background-repeat: no-repeat; background-position: top center; background-size: cover; padding-top: 80px; padding-bottom: 80px;">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 titlebar">
							<h2>Etape 2</h2>
						</div>
					</div>
				<p> EMPLACEMENT SOUMETTRE + CASE A COCHER POUR ACCEPTER LES CONDITIONS DES CONCOURS ! </p>
				</div>
			</div>
		
		<!-- Footer -->

						<footer id="footer">
							<div class="container">
						
						<!-- Copyright -->

						<div class="row">						
							<div id="footer_copyright" class="col-sm-12 text-center">		
								<p>Copyright 2014 <span>SLr</span>. All Rights Reserved.</p>	
							</div>
						</div>

						<!-- Réseaux -->
						
						<div class="row">
							<div id="footer_socials" class="col-sm-12 text-center">	
								<div id="contact_icons">																	
								<ul class="contact-socials clearfix">
					<li><a href="https://www.youtube.com/channel/UCqmpqCsEVSWQrHe_W1XMbWg"><img src="../img/socials/youtubemini.png" onmouseover="this.src='../img/socials/youtubemini-hover.png'" onmouseout="this.src='../img/socials/youtubemini.png'" /></a></li>
					<li><a href="https://www.facebook.com/slrchallenge"><img src="../img/socials/facebookmini.png" onmouseover="this.src='../img/socials/facebookmini-hover.png'" onmouseout="this.src='../img/socials/facebookmini.png'" /></a></li>
					<li><a href="https://twitter.com/SLrChallenge"><img src="../img/socials/twittermini.png" onmouseover="this.src='../img/socials/twittermini-hover.png'" onmouseout="this.src='../img/socials/twittermini.png'" /></a></li>
					<li><a href="https://plus.google.com/u/2/b/117661413522358421091/117661413522358421091/about"><img src="../img/socials/googlemini.png" onmouseover="this.src='../img/socials/googlemini-hover.png'" onmouseout="this.src='../img/socials/googlemini.png'" /></a></li>
								</ul>
								</div>
							</div>	
						</div>	
					</div>								
						</footer>

													</div>		

													
													<!-- JS -->		

													<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
													<script src="../js/bootstrap.min.js" type="text/javascript"></script>	
													<script src="../js/modernizr.custom.js" type="text/javascript"></script>
													<script src="../js/jquery.easing.js" type="text/javascript"></script>
													<script src="../js/retina.js" type="text/javascript"></script>	
													<script src="../js/jquery.stellar.min.js" type="text/javascript"></script>	
													<script defer src="../js/jquery.flexslider.js" type="text/javascript"></script>
													<script src="../js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
													<script defer src="../js/count-to.js"></script>
													<script defer src="../js/jquery.appear.js"></script>
													<script src="../js/jquery.mixitup.js" type="text/javascript"></script>
													<script src="../js/jquery.prettyPhoto.js" type="text/javascript"></script>
													<script src="../js/owl.carousel.js" type="text/javascript"></script>
													<script src="../js/jquery.easypiechart.min.js"></script>
													<script defer src="../js/jquery.validate.min.js" type="text/javascript"></script>
													<script src="../js/waypoints.min.js" type="text/javascript"></script>	
													<script src="../js/custom.js" type="text/javascript"></script>	
													<script src="../js/changer.js" type="text/javascript" ></script>
													<script defer src="../js/styleswitch.js"></script>	


</body>
		
		<?php
	}

?>