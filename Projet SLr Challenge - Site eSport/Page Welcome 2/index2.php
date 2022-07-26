<!-- Code PHP : Inscription --><?php          // Une fois le formulaire envoy?     	 if(isset($_POST["inscription"]))     {                    // V?fication de la validit?es champs          if(!preg_match("/^[A-Za-z0-9_]{3,20}$/", $_POST["pseudo"]))          {               $message = "Votre nom d'utilisateur doit comporter entre 3 et 20 caractères<br />\n";               $message .= "L'utilisation de l'underscore est autorisée";          }          elseif(!preg_match("/^[A-Za-z0-9]{5,}$/", $_POST["mdp"]))          {               $message = "Votre mot de passe doit comporter entre 5 et 32 caractères";          }          elseif($_POST["mdp"] != $_POST["C_mdp"])          {               $message = "Votre mot de passe n'a pas été correctement confirmé";          }          elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/",               $_POST["mail"]))          {               $message = "Votre adresse e-mail n'est pas valide";          }          else          {                              // Connexion ?a base de donn?               require("bdd.php");                              // V?fication de l'unicit?u nom d'utilisateur et de l'adresse e-mail               $result = mysql_query("                    SELECT pseudo                         , email                    FROM welcome_users                    WHERE pseudo = '" . $_POST["user"] . "'                    OR email = '" . $_POST["mail"] . "'               ");                              // Si une erreur survient               if(!$result)               {                    $message = "Erreur d'accès à la base de données lors de la vérification d'unicité";               }               else               {                                        // Si un enregistrement est trouv?                   					if(mysql_num_rows($result) > 0)                    {                                                  while($row = mysql_fetch_array($result))                         {                                                            if($_POST["pseudo"] == $row["pseudo"])                              {                                   $message = "Le pseudo " . $_POST["pseudo"];                                   $message .= " est déjà utilisé.";                              }                              elseif($_POST["mail"] == $row["email"])                              {                                   $message = "L'adresse e-mail " . $_POST["mail"];                                   $message .= " est déjà utilisée.";                              }                                                       }                                             }                    else                    {                                                                           // Cr?ion du compte utilisateur                         $result = mysql_query("                              INSERT INTO welcome_users(                                   pseudo                                   , password                                   , email                                   , Date_Inscription                              )                              VALUES(                                   '" . $_POST["pseudo"] . "'                                   , '" . md5($_POST["mdp"]) . "'                                   , '" . $_POST["mail"] . "'                                   , '" . time() . "'                              )                         ");						                                                   // Si une erreur survient                         if(!$result)                         {                              $message = "Erreur d'accès à la base de données lors de la création du compte utilisateur";                         }                         else                         {                                                            // Envoi du mail d'activation                              $sujet = "SLr-Challenge | Merci et bienvenue !";                                                            $message = "Merci de vous etres enregistrer sur notre site !<br />";							  $message .= "Pour information voici vos informations de connexion: <br />";							  $message .= "Pseudo: " . $_POST['pseudo'] . "<br />";							  $message .= "Mot de passe: " . $_POST['mdp'] . "<br />";							  $message .= "à bientot sur notre site !<br /><br />";                                                            // Si une erreur survient                              if(!@mail($_POST["mail"], $sujet, $message))                              {                                   $message = "Une erreur est survenue lors de l'envoi du mail d'inscription<br />\n";                                   $message .= "Veuillez contacter l'administrateur afin de vérifier si cela ne vous posera pas de problèmes.";                              }                              else                              {                                                                      // Message de confirmation                                   $message = "Votre compte utilisateur a correctement été créer<br />\n";                                   $message .= "Un email vient de vous etre envoyer avec vos informations de connexion.";                                                                 }                                                       }                                             }                                   }                         }     }     ?><!-- Fin Code PHP : Inscription --><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>SLr-Challenge | Welcome !</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles de bootstrap -->
    <link href="css/overwrite.css" rel="stylesheet">

	<!-- Police : Awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
    <!--[Si c'est Internet Explore 9]>
	  <link href="css/font-awesome-ie7.css" rel="stylesheet">
	<![endif]-->
	<link href="css/font-awesome-set.css" rel="stylesheet">

    <!-- Flexslider module -->
    <link href="css/flexslider.css" rel="stylesheet">

    <!-- prettyPhoto module -->	
	<link href="css/prettyPhoto.css" rel="stylesheet">	

	<!-- Style personnalisé -->
    <link href="css/style.css" rel="stylesheet">

	<!-- Police -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

	<!-- Theme -->
	<link href="skin/default.css" rel="stylesheet" />
	
    <!-- HTML5 and Respond.js pour Internet Explorer -->
    <!--[Si c'est IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  <div id="cbp-so-scroller" class="wrapper cbp-so-scroller">
	<!-- Start header -->	<header>		<div class="navbar navbar-default" style="			height: 70px;			width: 1370px;			">						<div class="navbar-header">				<a href="#" class="logo"><img src="img/logo.png" alt="" style="    margin-top: -20px;    margin-left: -55px;"></a>				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">					<span class="sr-only">Navigation</span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>				</button>									</div>						<div class="navbar-collapse collapse">			<ul class="nav navbar-nav" style="    margin-top: -30px;">					<li><a id="GoToHome" href="#home" class="selected"><img src="img/navbar-cat/accueil.png"/></a></li>					<li><a id="GoToWorks" href="#work"><img src="img/navbar-cat/informations.png"/></a></li>					<li><a id="GoToFeatures" href="#features"><img src="img/navbar-cat/caracteristiques.png"/></a></li>							<li><a id="GoToTeam" href="#team"><img src="img/navbar-cat/team.png"/></a></li>											<li><a id="GoToGallery" href="#gallery"><img src="img/navbar-cat/update.png"/></a></li>					<li><a id="GoToContact" href="#contact"><img src="img/navbar-cat/contact.png"/></a></li>											</ul>				<div class="navbar-right" style="    margin-top: -30px;">					<a href="#myModal" data-toggle="modal" data-target="#myModal" class="btnsign" style="margin-top: 65px;"><img src="img/navbar-cat/sign.png"/></a>				</div>								</div><!--/.nav-collapse -->		</div>			</header>	<!-- End header -->

	<!-- Lancement du module d'inscription -->	
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">			 
				<div class="modal-body">
					<div class="signup">
						<h4>Créer un nouveau compte</h4>
						<p>
						Créer un compte avant la réalisation du site SLr-Challenge vous permettra d'avoir accès à une bêta ainsi qu'à des fonctionnalités avant tout le monde !
						</p>							
						<form  id="inscription" action="http://<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"]; ?>" method="post">
							<div class="form-group">
<div class="col-lg-12"><input type="text" class="form-control form-block" placeholder="Entrez votre pseudo" data-msg="Entrez un pseudo valide">  <div class="validation" style="overflow: hidden;">Entrez un pseudo valide</div></div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input name="mail" type="text" class="form-control form-block" placeholder="Entrez votre adresse e-mail">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input name="mdp" type="password" class="form-control form-block" placeholder="Entrez votre mot de passe">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input name="C_mdp" type="password" class="form-control form-block" placeholder="Confirmez votre mot de passe">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input name="inscription" type="submit" value="Inscrivez-vous" class="btn btn-md"/>
								</div>									
							</div>									
						</form>							
					</div>
					<div class="signin">
						<h4>Connectez-vous</h4>
						<p>
						Vous connectez avant la réalisation du site SLr-Challenge vous permettra d'avoir accès à quelques espaces (commentaires, formulaire de contact...) !
						</p>
						<form class="form-horizontal">
							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control form-block" placeholder="Entrez votre pseudo">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control form-block" placeholder="Entrez votre mot de passe">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<button class="btn btn-md">Connectez-vous</button>
								</div>									
							</div>									
						</form>								<?php 							if(isset($message)) 							{								echo $message;							}				 						?>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<!-- Fin du module d'inscipition -->
		
	<!-- Lancement de la page d'accueil -->
	<section id="home">
		<div class="home-wrapper">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-10 col-md-offset-1 scrolltop home-intro">
						<ul>
							<li><img src="img/ecp.png"/></li>
							<li><img src="img/ecw.png"/></li>
							<li><img src="img/ece.png"/></h3></li>
						</ul>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<p>Nous voulons vous apporter l'expérience de la compétition peu importe votre niveau, grâce à SLr-Challenge !</p>
					</div>
				</div>						
			</div>
			<a href="#work"</a>
		</div>		
	</section>
	<!-- Fin de la page d'accueil -->

	<!-- Informations -->
	<section id="work" class="contain secondary-bg">
		<div class="container">
			<div class="row cbp-so-section">
				<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	
					<div class="heading">
						<h4>Informations</h4>
						<p>
						Vous voulez savoir comment nous fonctionnons ? Vous souhaitez avoir plus d'informations sur notre projet ? Cet espace vous permettra de répondre à vos questions !
						</p>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-12">	
					<div class="work-it-wrapper">
						<span class="circle-top"></span>
						<div class="work-it-contain on-right cbp-so-section">
							<div class="work-it-icon">
								<i class="icon-shopping-cart"></i>
							</div>
							<div class="work-it-text cbp-so-side cbp-so-side-right">
								<h5>SLr-Challenge c'est quoi ?</h5>
								
								<img src="img/contents/ss-leprojet.png" style="
    margin-left: 50px;
    margin-right: 90px;
">
								
								<p>
								Le projet «SLr» est une structure regroupant trois sites concernant l'informatique et les jeux vidéos.
                                <br></br>
SLr-Challenge en fait partie. Notre objectif est de regrouper la communauté française des jeux vidéos PC à travers la compétition ainsi que vous procurez une magnifique expérience qu'est l'univers de la compétition nommée eSport (sport électronique).
<br></br> 
SLr-Challenge vous permettra de créer des tournois personnalisés grâce aux solutions proposées par notre équipe, parler entre équipe, rejoindre un tournoi, augmenter vos performances..etc. Que vous soyez débutant ou expert, «Everyone can play» (Tout le monde peut jouer). Vous êtes Gamer ? Vous rêvez d'exercer votre passion dans une ambiance exceptionnelle ? SLr-Challenge est votre solution !
								</p>
							</div>
						</div>
							
						<div class="work-it-contain on-left cbp-so-section">
							<div class="work-it-icon">
								<i class="icon-cloud-download"></i>
							</div>
							<div class="work-it-text cbp-so-side cbp-so-side-left">
								<h5>Participer au projet !</h5>
								<p>
								Le projet SLr est un projet qui a de l'ampleur, notre équipe à toujours besoin de membres. Vous êtes développeur, graphiste, commentateur, testeur, community manager, rédacteur... etc. N'hésitez pas à nous contacter pour rejoindre notre équipe ! Peu importe l'expérience, que vous soyez étudiant ou adulte, nous vous accueillerons dans l'équipe. La seule restriction, c'est la motivation et la présence.
</p>
<p>Pour participer au projet et organiser un partenariat, contactez nous via cette adresse e-mail :
partenariat@slr-challenge.fr</p>
<p>Pour participer au projet et rejoindre l'équipe, contactez nous via cette adresse e-mail :
recrutement@slr-challenge.fr</p>
<p>Pour nous contacter pour autre chose, veuillez nous envoyer votre message via cette adresse e-mail : 
admin@slr-challenge.fr
								</p>
							</div>
						</div>	

						<div class="work-it-contain on-right cbp-so-section">
							<div class="work-it-icon">
								<i class="icon-wrench"></i>
							</div>
							<div class="work-it-text cbp-so-side cbp-so-side-right">
								<h5>Soutenir le projet !</h5>
								<p>
								A REMPLIR
								</p>
							</div>
						</div>

						<div class="work-it-contain on-left cbp-so-section">
							<div class="work-it-icon">
								<i class="icon-thumbs-up"></i>
							</div>
							<div class="work-it-text cbp-so-side cbp-so-side-left">
								<h5>Remerciement</h5>
								<p>
								A REMPLIR
								</p>
							</div>
						</div>							
						<span class="circle-bottom"></span>
					</div>
				</div>				
			</div>			
		</div>					
	</section>
	<!-- Fin : Informations -->

	<!-- Partenaires -->
	<div id="client" class="contain dark-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="client-list">
						<li>
							<ul>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-top">
										<span class="logo-hover"><img src="img/client/logo1-hover.png" alt="" /></span>
										<img src="img/client/logo1.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-top">
										<span class="logo-hover"><img src="img/client/logo2-hover.png" alt="" /></span>
										<img src="img/client/logo2.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-top">
										<span class="logo-hover"><img src="img/client/logo3-hover.png" alt="" /></span>
										<img src="img/client/logo3.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-top">
										<span class="logo-hover"><img src="img/client/logo4-hover.png" alt="" /></span>
										<img src="img/client/logo4.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="last cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-top">
										<span class="logo-hover"><img src="img/client/logo5-hover.png" alt="" /></span>
										<img src="img/client/logo5.png" class="client-logo" alt="" />
									</a>
								</li>							
							</ul>
						</li>
						<li class="bottom-list">
							<ul>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">
										<span class="logo-hover"><img src="img/client/logo6-hover.png" alt="" /></span>
										<img src="img/client/logo6.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">
										<span class="logo-hover"><img src="img/client/logo7-hover.png" alt="" /></span>
										<img src="img/client/logo7.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">
										<span class="logo-hover"><img src="img/client/logo8-hover.png" alt="" /></span>
										<img src="img/client/logo8.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">
										<span class="logo-hover"><img src="img/client/logo9-hover.png" alt="" /></span>
										<img src="img/client/logo9.png" class="client-logo" alt="" />
									</a>
								</li>
								<li class="last cbp-so-section">									
									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">
										<span class="logo-hover"><img src="img/client/logo10-hover.png" alt="" /></span>
										<img src="img/client/logo10.png" class="client-logo" alt="" />
									</a>
								</li>							
							</ul>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin : Partenaires -->

	<!-- Caractéristiques -->
	<section id="features">
		<div class="headline">
			<div class="container">
				<div class="row cbp-so-section">
					<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	
						<h4>Caractéristiques impliquées</h4>
						<p>
						Les caractéristiques que vous allez apercevoir, sont les fonctionnalités auxquelles vous allez avoir accès lorsque le site sera construit. Plus le projet avancera grâce à votre aide, plus les caractéristiques se multiplieront !
						</p>
					</div>
				</div>
			</div>
			<span class="headline-arrow"></span>
		</div>
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="image-cap">
							<img src="img/features/img1.png" alt="" />
						</div>
						<div class="text-cap">
							<h4>A REMPLIR</h4>
							<p>
							Description de la caractéristique
							</p>
							<a href="#" class="text-link">Lire l'article en entier</a>
						</div>
						<img src="img/features/bg.jpg" alt="" />					
					</li>
					<li>
						<div class="image-cap">
							<img src="img/features/img3.png" alt="" />
						</div>
						<div class="text-cap">
							<h4>A REMPLIR</h4>
							<p>
							Description de la caractéristique
							</p>
							<a href="#" class="text-link">Lire l'article en entier</a>
						</div>				
						<img src="img/features/bg1.jpg" alt="" />
					</li>
					<li>
						<div class="image-cap">
							<img src="img/features/img2.png" alt="" />
						</div>
						<div class="text-cap">
							<h4>A REMPLIR</h4>
							<p>
							Description de la caractéristique
							</p>
							<a href="#" class="text-link">Lire l'article en entier</a>
						</div>				
						<img src="img/features/bg2.jpg" alt="" />
					</li>
					<li>
						<div class="image-cap">
							<img src="img/features/img4.png" alt="" />
						</div>
						<div class="text-cap">
							<h4>A REMPLIR</h4>
							<p>
							Description de la caractéristique
							</p>
							<a href="#" class="text-link">Lire l'article en entier</a>
						</div>				
						<img src="img/features/bg3.jpg" alt="" />
					</li>					
				</ul>
			</div>
	</section>
	<!-- Fin : Caractéristiques -->
	
	<!-- Citations -->
	<div id="testimonials" class="contain dark-bg">
		<div class="container">
			<div class="row margintop10 cbp-so-section">
				<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">
					<ul class="ticker">
						<li>
							<div class="testimoni">
								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar1.png" alt="" /></a>
								<blockquote>
									A REMPLIR
								</blockquote>
								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>
							</div>
						</li>
						<li>
							<div class="testimoni">
								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar2.png" alt="" /></a>
								<blockquote>
									A REMPLIR
								</blockquote>
								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>
							</div>
						</li>
						<li>
							<div class="testimoni">
								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar3.png" alt="" /></a>
								<blockquote>
									A REMPLIR
								</blockquote>
								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>
							</div>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin : Citations -->

	<!-- L'équipe -->
	<section id="team" class="contain primary-bg cbp-so-section">
		<div class="container cbp-so-side cbp-so-side-top">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">	
					<div class="heading">
						<h4>Notre équipe</h4>
						<p>
						L'équipe est entièrement bénévole, nous travaillons sur ce projet grâce à notre passion avec nos différentes compétences. La seule règle de notre équipe est la motivation et la présence. Nous accueillons toutes les personnes motivés et capables de fournir leurs aides lors de leurs temps libre.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center">	
					<div class="team-image-wrapper">
						<div class="team-frame">
							<div class="team-profile">
								<h5>MEMBRE</h5>
								<p>ROLE dans SLr-Challenge</p>
								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt="" /></a>
								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt="" /></a>
							</div>
						</div>					
						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" /></a>
					</div>						
				</div>
				<div class="col-md-4 text-center">	
					<div class="team-image-wrapper">
						<div class="team-frame">
							<div class="team-profile">
								<h5>MEMBRE</h5>
								<p>ROLE dans SLr-Challenge</p>
								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt="" /></a>
								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt="" /></a>
							</div>
						</div>						
						<a href="#" class="team-image"><img src="img/team/avatar2.png" alt="" /></a>
					</div>						
				</div>
				<div class="col-md-4 text-center">	
					<div class="team-image-wrapper">
						<div class="team-frame">
							<div class="team-profile">
								<h5>Membre</h5>
								<p>ROLE dans SLr-Challenge</p>
								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt="" /></a>
								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt="" /></a>
							</div>
						</div>						
						<a href="#" class="team-image"><img src="img/team/avatar3.png" alt="" /></a>
					</div>						
				</div>				
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-2 text-center">	
					<div class="team-image-wrapper">
						<div class="team-frame">
							<div class="team-profile">
								<h5>MEMBRE</h5>
								<p>ROLE dans SLr-Challenge</p>
								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt="" /></a>
								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt="" /></a>
							</div>
						</div>					
						<a href="#" class="team-image"><img src="img/team/avatar4.png" alt="" /></a>
					</div>						
				</div>
				<div class="col-md-4 text-center">	
					<div class="team-image-wrapper">
						<div class="team-frame">
							<div class="team-profile">
								<h5>MEMBRE</h5>
								<p>ROLE dans SLr-Challenge</p>
								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt="" /></a>
								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt="" /></a>
							</div>
						</div>						
						<a href="#" class="team-image"><img src="img/team/avatar5.png" alt="" /></a>
					</div>						
				</div>			
			</div>				
		</div>					
	</section>
	<!-- Fin : l'équipe  -->

	<!-- Update -->
	<section id="gallery" class="contain secondary-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">	
					<div class="heading">
						<h4>Screenshots de nos mises à jour !</h4>
					</div>
					<ul class="portfolio-categ filter clearfix">
						<li class="all active"><a href="#">Tout</a></li>
						<li class="web"><a href="#">Design</a></li>
						<li class="graphic"><a href="#">Services</a></li>
						<li class="brand"><a href="#">Fonctionnalités</a></li>
						<li class="apps"><a href="#">Autres</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
				<ul class="portfolio-area row">	
					<li class="portfolio-item" data-id="id-0" data-type="web">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/1.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>
							<img src="img/gallery/1.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-1" data-type="brand">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/2.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/2.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-2" data-type="apps">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/3.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/3.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-3" data-type="web">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/4.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>
							<img src="img/gallery/4.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-4" data-type="graphic">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/5.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/5.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-5" data-type="apps">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/6.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/6.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-6" data-type="brand">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/7.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>
							<img src="img/gallery/7.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-7" data-type="brand">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/8.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/8.jpg" class="img-gallery" alt="" />
						</div>
					</li>
					<li class="portfolio-item" data-id="id-8" data-type="web">	
						<div class="image-wrapper">
							<div class="image-caption">
								<a href="img/gallery/9.jpg" class="zoom" data-pretty="prettyPhoto"><i class="icon-zoom-in"></i></a>
								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>
							</div>						
							<img src="img/gallery/9.jpg" class="img-gallery" alt="" />
						</div>
					</li>						
				</ul>
			</div>		
		</div>					
	</section>
	<!-- Fin : Update -->

	<!-- Contact -->
	<section id="contact" class="primary-bg">
		<div class="headline">
			<div class="container">
				<div class="row cbp-so-section">
					<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	
						<h4>Contactez-nous</h4>
						<p>
						Vous pouvez nous contacter grâce à ce formulaire si vous souhaitez nous poser des questions, participer au projet, faire une demande de partenariat...etc.
						</p>
					</div>
				</div>
			</div>
			<span class="headline-arrow"></span>			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">	
					<form id="contactform" action="contact/contact.php" method="post" class="validateform" name="leaveContact">
						<div class="clearfix"></div>
						<div id="sendmessage">
							<div class="alert alert-info marginbot35">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Votre message a été envoyé. Merci !</strong><br />
							</div>							
						</div>								
						<ul class="listForm cbp-so-section">
							<li class="cbp-so-side cbp-so-side-left">
								<input class="form-control input-name" type="text" name="name" data-rule="maxlen:4" data-msg="Vous devez entrer un prénom et un nom" placeholder="Entrez vos prénoms/noms..." />
								<div class="validation"></div>
							</li>
							<li class="cbp-so-side cbp-so-side-right">
								<input class="form-control input-email" type="text" name="email" data-rule="email" data-msg="Entrez un e-mail valide" placeholder="Entrez votre adresse e-mail..."/>	
								<div class="validation"></div>
							</li>
							<li class="cbp-so-side cbp-so-side-bottom">
								<textarea class="form-control input-message" rows="9" name="message" data-rule="required" data-msg="Ecrivez quelque chose pour nous..." placeholder="Écrire quelque chose pour nous..."></textarea>												
								<div class="validation"></div>
							</li>
							<li class="text-center cbp-so-side cbp-so-side-bottom">
									<input type="submit" value="Envoyer" class="btn-submit" name="Submit" />
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>		
	</section>
	<!-- Fin : Contact -->

	<!-- Appel à l'inscription -->
	<div id="cta-section" class="contain dark-bg">
		<div class="container">
			<div class="row text-center cbp-so-section">
				<div class="col-md-10 col-md-offset-1">
					<p class="cbp-so-side cbp-so-side-top">Si vous souhaitez vous inscrire en avance sur SLr-Challenge et avoir accès à des fonctionnalités avant tout le monde !</p>
					<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-md cbp-so-side cbp-so-side-bottom">Inscrivez-vous maintenant !</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin : Appel à l'inscription -->
	
	<!-- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-center cbp-so-section">
				<div class="col-md-10 col-md-offset-1">
					<div class="social-network">
						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><i class="icon-facebook"></i></a>
						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><i class="icon-twitter"></i></a>
						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><i class="icon-linkedin"></i></a>
						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><i class="icon-pinterest"></i></a>
						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><i class="icon-google-plus"></i></a>
						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><i class="icon-rss"></i></a>
					</div>					
					<p class="cbp-so-side cbp-so-side-bottom">2014 &copy; Copyright <a href="#">SLr-Challenge</a> All rights Reserved.</p>
				</div>
			</div>
		</div>	
	</footer>
	<!-- End footer -->
  </div>	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placé à la fin du document afin que les pages se chargent plus rapidement -->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-easing-1.3.js"></script>
	
	<!-- Navigation Fixe -->
	<script src="js/navigation/waypoints.min.js"></script>
	<script src="js/navigation/jquery.smooth-scroll.js"></script>		
	<script src="js/navigation/navbar.js"></script>	

	<!-- JavaScript cbpscroller -->
	<script src="js/cbpscroller/modernizr.custom.js"></script>	
	<script src="js/cbpscroller/classie.js"></script>
	<script src="js/cbpscroller/cbpScroller.js"></script>
	
	<!-- JavaScript jcarousellite -->
	<script src="js/jcarousellite/jcarousellite_1.0.1c4.js"></script>	
	<script src="js/jcarousellite/setting.js"></script>

	<!-- Ticker -->
	<script src="js/ticker/ticker.js"></script>
	<script src="js/ticker/setting.js"></script>

	<!-- prettyPhoto -->
	<script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script src="js/prettyPhoto/setting.js"></script>
	
	<!-- Filtre -->
	<script src="js/filter/jquery.quicksand.js"></script>
	<script src="js/filter/setting.js"></script>

	<!-- SliderFlex -->
	<script src="js/flexslider/jquery.flexslider.js"></script>
    <script src="js/flexslider/setting.js"></script>
	
	<!-- Javascript : Validation de contact -->
    <script src="js/validation.js"></script>

	<!-- JavaScript : Haut de page -->
	<script src="js/totop/jquery.ui.totop.js"></script>	
	<script src="js/totop/setting.js"></script>
	
	<!-- Javascript : Custom -->
	<script src="js/custom.js"></script>	
	
	<!-- JavaScript : Option de couleur -->
	<script src="js/theme-option/demosetting.js"></script>	
	
  </body>
</html>
