<?php
	session_start();

	if (!isset($_SESSION['login'])){
		header("Location: index.php");
	} else {

		 $username = "slrchallbdd";
		 $password = "chall14slr";

		$bdd = new PDO('mysql:host=mysql51-130.perso;dbname=slrchallbdd', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		// MySql Standard ISO-8859-1)
		$bdd->query("SET NAMES 'utf8'");

		$req =$bdd ->prepare("SELECT mail, date_inscription FROM membre_welcome WHERE pseudo = :nom");
		$req->execute(array('nom' => $_SESSION['login']));
		while ($donnees = $req->fetch()){
			$mail = $donnees['mail'];
			$date = $donnees['date_inscription'];
		}

		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta charset="utf-8">

		<title>SLr-Challenge | Panel !</title>

		<!-- Pour Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	

		<!-- Informations -->
		<meta name="mots" content="challenge, slr, esport, sport, jeux vidéos, tournois, ligues, welcome, abonnements">
		<meta name="description" content="La page de lancement du projet SLr-Challenge !">		
		<meta name="auteur" content="SLr">

		<!-- CSS -->
		<link href="css/bootstrap_panel.css" rel="stylesheet"> 
		<link href="css/font-awesome.min.css" rel="stylesheet">	
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/style_panel.css" rel="stylesheet"> 	
		<link href="css/responsive.css" rel="stylesheet"> 	
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
						<a class="navbar-brand" href="http://slr-challenge.fr/index.php"><img src="img/logo.png" alt="logo" role="banner" style="width: 140px;"></a>

					</div>

					<!-- Menu -->
					<nav id="navigation-menu" class="collapse navbar-collapse" role="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li><a id="GoToHome" class="selected-nav" href="index.php">Accueil</a></li>
							<li><a id="GoToDeconnecion" href="deconnexion.php">Déconnexion</a></li>
						</ul>
					</nav>

				</div>

			</div>

		</header>

						<!-- Le contenu -->	
							
							<div id="content_wrapper">

						<!-- L'Introduction -->

							<section id="intro">
								<div class="overlay">
									<div class="container">		
										<div id="intro_content" class="row">

						<!-- Le texte de L'Introduction -->

							<div class="col-md-7">
								<div class="intro_text">
									<h2>Vous êtes actuellement dans l'espace membre !</h2>
									<h3>Merci pour votre inscription, revenez régulièrement !</h3>
										</div>
										</div>	<!-- Fin du texte -->
											</div>  
												</div>	 
													</div>  
														</div>	  
							<section>	

						<!-- Concours -->				

						<section id="clients" style="padding-top: 80px; padding-bottom: 150px; position: relative; background-color: #FFFFF; border-bottom: none;">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 ">									
										<div class="titlebar">	
											<h3>Concours</h3>
											<h2>Pouvez-vous gagner ?</h2>									
										</div>
									</div>	
								</div>

								<img id="Image-Maps-Com-image-maps-2014-12-31-060033" src="http://www.image-maps.com/m/private/0/si076182nfgm2v61o7qh72etv6_1.png" border="0" width="657" height="393" orgwidth="657" orgheight="393" usemap="#image-maps-2014-12-31-060033" alt="" style="display: block; width: 100% \9; max-width: 100%; height: 100%; margin: auto;">
								<map name="image-maps-2014-12-31-060033" id="ImageMapsCom-image-maps-2014-12-31-060033">
								<area  alt="" title="" href="concours/1.php" shape="rect" coords="476,6,655,86" style="outline:none;" target="_self"     />
								<area shape="rect" coords="655,391,657,393" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
								</map>
								
								</div>	 
						</section>	
						
						<!-- Bêta + News du jour -->
						
						<section id="about-1" style="border-bottom: solid;">
				
				<div class="container">
					<div id="accordion-holder" class="row">
						<div class="col-md-6 text-center animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="600">
							<h3> Actualités quotidiennes </h3>
							<a class="twitter-timeline" href="https://twitter.com/SLrChallenge" data-widget-id="556492924138315777">Tweets de @SLrChallenge</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						<div class="col-md-6">
							<h3> Vos informations </h3> <br>
								<p> Pseudo : <?php echo $_SESSION['login']; ?></p> 
								<p> Mail : <?php echo $mail; ?></p>
								<p> Date d'inscription : <?php echo $date; ?></p> 
							<div class="panel-group" id="accordion">
								<div class="panel panel-default animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="300">
								<div class="panel panel-default animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="900">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseFour"><img src="img/contents/betablue.png"> Accès bêta </a> </h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											Clé d'activation : /
										<br/>Identifiant : /
										<br/>L'accès à la bêta n'est pas encore disponible !
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
						
						<!-- Contact -->
	
						<section id="contact-info">
							<div class="container">	
								<div class="row">
									<div class="col-sm-12 titlebar">
										<h3>Contactez-nous</h3>
									</div>
								</div>

								<script type="text/javascript">document.write(unescape("%3Cscript src='http" +  (document.location.protocol == 'https:' ? 's' : '') + "://www.coffeecup.com/api/sdrive/forms/form.js?name=test%26slug=285538%26height=565%26crossdomains=true%26rand=" + Math.floor( Math.random() * 1000000000 ) + "' type='text/javascript'%3E%3C/script%3E"));</script>
							</div>		    
						</section>	

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
					<li><a href="https://www.youtube.com/channel/UCqmpqCsEVSWQrHe_W1XMbWg"><img src="img/socials/youtubemini.png" onmouseover="this.src='img/socials/youtubemini-hover.png'" onmouseout="this.src='img/socials/youtubemini.png'" /></a></li>
					<li><a href="https://www.facebook.com/slrchallenge"><img src="img/socials/facebookmini.png" onmouseover="this.src='img/socials/facebookmini-hover.png'" onmouseout="this.src='img/socials/facebookmini.png'" /></a></li>
					<li><a href="https://twitter.com/SLrChallenge"><img src="img/socials/twittermini.png" onmouseover="this.src='img/socials/twittermini-hover.png'" onmouseout="this.src='img/socials/twittermini.png'" /></a></li>
					<li><a href="https://plus.google.com/u/2/b/117661413522358421091/117661413522358421091/about"><img src="img/socials/googlemini.png" onmouseover="this.src='img/socials/googlemini-hover.png'" onmouseout="this.src='img/socials/googlemini.png'" /></a></li>
								</ul>
								</div>
							</div>	
						</div>	
					</div>								
						</footer>

													</div>		

													
													<!-- JS -->		

													<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
													<script src="js/bootstrap.min.js" type="text/javascript"></script>	
													<script src="js/modernizr.custom.js" type="text/javascript"></script>
													<script src="js/jquery.easing.js" type="text/javascript"></script>
													<script src="js/retina.js" type="text/javascript"></script>	
													<script src="js/jquery.stellar.min.js" type="text/javascript"></script>	
													<script defer src="js/jquery.flexslider.js" type="text/javascript"></script>
													<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
													<script defer src="js/count-to.js"></script>
													<script defer src="js/jquery.appear.js"></script>
													<script src="js/jquery.mixitup.js" type="text/javascript"></script>
													<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
													<script src="js/owl.carousel.js" type="text/javascript"></script>
													<script src="js/jquery.easypiechart.min.js"></script>
													<script defer src="js/jquery.validate.min.js" type="text/javascript"></script>
													<script src="js/waypoints.min.js" type="text/javascript"></script>	
													<script src="js/custom.js" type="text/javascript"></script>	
													<script src="js/changer.js" type="text/javascript" ></script>
													<script defer src="js/styleswitch.js"></script>	


</body>
		
		<?php
	}

?>
