<html lang="en" class=" js no-touch"><head>

    <meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

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
	
	<!-- Formulaire de contact -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script src="cfg-contactform-251/js/contactform.js"></script>
<link href="cfg-contactform-251/css/contactform.css" rel="stylesheet" type="text/css" />

	<!-- Fin du formulaire de contact -->



	<!-- Style personnalisé -->

    <link href="css/style.css" rel="stylesheet">



	<!-- Police -->

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link href="css/default.css" rel="stylesheet" type="text/css">



	<!-- Theme -->

	<!-- HTML5 and Respond.js pour Internet Explorer -->

    <!--[Si c'est IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->

	<script>
function pop() {
window.open('pop','height=1280,width=720,top=z,left=t,resible=no');
}
</script>


  </head>



  <body>

  <div id="cbp-so-scroller" class="wrapper cbp-so-scroller">

	<!-- Start header -->

	<header>

		<div class="navbar navbar-default" style="
			height: 70px;
			width: 100%;
			">			

			<div class="navbar-header">

				<a href="#" class="logo"><img src="img/logo.png" alt="" style="
    margin-top: -20px;
    margin-left: -45px;
"></a>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

					<span class="sr-only">Navigation</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</button>						

			</div>			
				<nav class="clearfix">
			
			<div class="navbar-collapse collapse">
			
				<ul class="clearfix">
			
			<ul class="nav navbar-nav">

					<li><a id="GoToHome" href="#home" class="selected"><img src="img/navbar-cat/accueil.png"></a></li>

					<li><a id="GoToWorks" href="#work"><img src="img/navbar-cat/informations.png"></a></li>

					<li><a id="GoToFeatures" href="#features"><img src="img/navbar-cat/caracteristiques.png"></a></li>		

					<li><a id="GoToTeam" href="#team"><img src="img/navbar-cat/team.png"></a></li>						

					<li><a id="GoToGallery" href="#gallery"><img src="img/navbar-cat/update.png"></a></li>

					<li><a id="GoToContact" href="#contact"><img src="img/navbar-cat/contact.png"></a></li>							

				</ul>
				
				<a href="#" id="pull">Menu</a>  
			
			</ul></div></nav>

				<div class="navbar-right" style="

    margin-top: -30px;

">
			<?php				if(isset($_COOKIE['conex']))				{
					echo "<a href='account.php'><img src='img/navbar-cat/monprofil.png' style='margin-top: -35px; margin-left: 1090px'></a>";				}				else				{					echo "<a href='inscriptiontest.php' class='btnsign' style='margin-top: 65px;'><img src='img/navbar-cat/sign.png' style='margin-top: -35px; margin-left: 1090px'></a>";				}			?>
				</div>								

			</div><!--/.nav-collapse -->

		</header></div>		

	

	<!-- End header -->



	<!-- Lancement du module d'inscription -->	
		<section id="sign">
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog">

			<div class="modal-content">			 

				<div class="modal-body">

					<div class="signup">

						<h4>Créer un nouveau compte</h4>

						<p>

						Créer un compte avant la réalisation du site SLr-Challenge vous permettra d'avoir accès à une bêta ainsi qu'à des fonctionnalités avant tout le monde !

						</p>							

						<form class="form-horizontal">

							<div class="form-group">

								<div class="col-lg-12">

									<input type="text" class="form-control form-block" placeholder="Entrez votre pseudo">

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-12">

									<input type="text" class="form-control form-block" placeholder="Entrez votre adresse e-mail">

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-12">

									<input type="text" class="form-control form-block" placeholder="Entrez votre mot de passe">

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-12">

									<input type="text" class="form-control form-block" placeholder="Confirmez votre mot de passe">

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-12">

									<button class="btn btn-md">Inscrivez-vous</button>

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

						</form>							

					</div>

				</div>				

			</div>

		</div>

	</div>		</section>

	<!-- Fin du module d'inscipition -->

		

	<!-- Lancement de la page d'accueil -->

	<section id="home">

		<div class="home-wrapper">

			<div class="container">

				<div class="row text-center">

					<div class="col-md-10 col-md-offset-1 scrolltop home-intro" style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; height: 240px; margin-top: 40px;">

						<ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; height: 960px; top: -240px;">

							<li style="overflow: hidden; float: none; width: 100%; height: 240px;"><img src="img/ecp.png"></li>

							<li style="overflow: hidden; float: none; width: 100%; height: 240px;"><img src="img/ecw.png"></li>

							<li style="overflow: hidden; float: none; width: 100%; height: 240px;"><img src="img/ece.png"></li>

						<li style="overflow: hidden; float: none; width: 100%; height: 240px;"><img src="img/ecp.png"></li></ul>

					</div>

				</div>

				<div class="row text-center">

					<div class="col-md-8 col-md-offset-2">

						<img src="img/slogan-test-down.png">

					</div>

				</div>						

			</div>

			<a href="#work" <="" a="">

		</a></div><a href="#work" <="" a="">		

	</a></section><a href="#work" <="" a="">

	<!-- Fin de la page d'accueil -->

	<img src="img/sep-background.png">

	<!-- Informations -->

	<section id="work" class="contain secondary-bg">

		<div class="container">

			<div class="row cbp-so-section">

				<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	

					<div class="heading">

						<img src="img/categories/informations.png">

						<img src="img/slogan-test-down-informations.png">

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

								<img src="img/categories/PCSC.png">


								

								<img src="img/contents/PCS-1.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">

								<p style="
    font-size: 16px;
">

							Le projet «SLr», est un projet qui a réellement débuté depuis Juin 2014. Ce projet consiste à établir une structure comprenant trois sites web concernant l'informatique et les jeux vidéos. SLr-Challenge est un des sites de notre projet. 
									
                                    
                                    
                                    <img src="img/contents/PCS-2.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">
                                   
                                   
                                   
                                    
							Le cercle de la compétition en ligne nommée «eSport» est très accessible aux professionnels, nous voulons reproduire leurs univers afin de l'apporter pour tous. Nous voulons réellement projeter les joueurs dans l'univers du sport électronique. L'objectif est de regrouper la communauté française des jeux vidéos PC grâce à notre site, qui vous permettra d'exprimer votre talent ou vous amusez lors des différends tournois en ligne sur divers jeux vidéos PC. SLr-Challenge vous permettra de créer des tournois personnalisés grâce aux solutions proposées par notre équipe, discuter entre équipe, rejoindre un tournoi, augmenter vos performances..etc. Que vous soyez débutant ou expert, «Everyone can play» (Tout le monde peut jouer).
								</p>

							</div>

						</div>

							

						<div class="work-it-contain on-left cbp-so-section">

							<div class="work-it-icon">

								<i class="icon-shopping-cart"></i>

							</div>

							<div class="work-it-text cbp-so-side cbp-so-side-left">

								<img src="img/categories/PAP.png">

								<img src="img/contents/PAP-1.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">

								<p style="
    font-size: 16px;
">

							      Le projet SLr est un projet très ambitieux et qui peut prendre de l'importance. Notre équipe grandie perpétuellement, mais nous avons toujours besoin de membres pour accomplir notre objectif . Vous êtes développeur, graphiste, commentateur, testeur, community manager, rédacteur... etc. N'hésitez pas à nous contacter pour rejoindre notre équipe et vous y serez à votre aise. Qu'importe l'expérience lorsque vous êtes motivé ! Que vous soyez étudiant ou adulte, garçon ou fille, nous vous accueillerons dans l'équipe. Les seules caractéristiques nécessaires pour rejoindre notre équipe est : La motivation, le minimum de présence et la rigueur ! 
									
                                    
                                    
                                    <img src="img/contents/PAP-2.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">
                                   
                                  Pour participer au projet en organisant un partenariat, contactez nous via cette adresse e-mail : partenariat@slr-challenge.fr
								  <br><br>
							      Pour participer au projet en rejoignant l'équipe, contactez nous via cette adresse e-mail : recrutement@slr-challenge.fr

</p>
							</div>

						</div>	



						<div class="work-it-contain on-right cbp-so-section">

							<div class="work-it-icon">

								<i class="icon-shopping-cart"></i>

							</div>

							<div class="work-it-text cbp-so-side cbp-so-side-right">

								<img src="img/categories/SLP.png">
								
								<img src="img/contents/SLP-1.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">

										<p style="
    font-size: 16px;
">A REMPLIR AVEC LES IMAGES/LIENS</p>
                                    
                                    <img src="img/contents/SLP-2.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">
                                   
                                 <p style="
    font-size: 16px;
"> Nous ne possédons pas les ressources nécessaires pour financer les serveurs, le nom de domaine, les bases de données, les modules, les membres... Si vous en avez l'envie et si vous croyez en notre projet, vous pouvez nous rendre service grâce à la page de dons ci-dessous, nous en serons très reconnaissant et vous obtiendrez bien entendu des contreparties :
							    </p>
								<p style="
    font-size: 16px;
">A REMPLIR AVEC L'IMAGE DON, etc...</p>
								
								 <img src="img/contents/SLP-3.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">
								 
								 <p style="
    font-size: 16px;
">Vous pouvez vous enregistrer sur cette page avant que le site soit en ligne. Cela vous permettra d'avoir des fonctionnalités en exclusivité comme l'accès à la bêta du site et des avantages lorsque le site sera en ligne, inscription à des tirages au sort pour gagner des cadeaux, ainsi que d'autres offres... Le formulaire d'inscription se trouve en haut à gauche de cette page ! </p>

							</div>

						</div>



						<div class="work-it-contain on-left cbp-so-section">

							<div class="work-it-icon">

								<i class="icon-shopping-cart"></i>

							</div>

							<div class="work-it-text cbp-so-side cbp-so-side-left">

								<img src="img/categories/Remerciement.png">

								<img src="img/contents/R-1.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">

										<p style="
    font-size: 16px;
">Nous vous remercions pour l'intérêt que vous portez envers ce projet en espérant qu'il vous aura intéressé. Merci à ceux qui ont fait dons de leur générosité ainsi qu'à ceux qui ont adhéré au programme de fidélité ! En espérant vous revoir bientôt !</p>
                                    
                                    <img src="img/contents/R-2.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">
                                   
									<img src="img/contents/PC.png" style="margin-left: -22px; margin-right: 90px;margin-top: 10px;margin-bottom: 10px;">

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

	</a><div id="client" class="contain dark-bg"><a href="#work" <="" a="">

		</a><div class="container"><a href="#work" <="" a="">

			</a><div class="row"><a href="#work" <="" a="">

				</a><div class="col-md-12"><a href="#work" <="" a="">

					</a><ul class="client-list"><a href="#work" <="" a="">

						</a><li><a href="#work" <="" a="">

							</a><ul><a href="#work" <="" a="">

								</a><li class="cbp-so-section"><a href="#work" <="" a="">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-top">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo1-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo1.png" class="client-logo" alt="">

									</a>

								</a></li><a href="#work" <="" a="">

								</a><li class="cbp-so-section"><a href="#work" <="" a="">									

									</a><a href="#" class="client-link cbp-so-side cbp-so-side-top">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo2-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo2.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-top">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo3-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo3.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-top">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo4-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo4.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="last cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-top">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo5-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo5.png" class="client-logo" alt="">

									</a>

								</li>							

							</ul>

						</li>

						<li class="bottom-list">

							<ul>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo6-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo6.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo7-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo7.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo8-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo8.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo9-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo9.png" class="client-logo" alt="">

									</a>

								</li>

								<li class="last cbp-so-section">									

									<a href="#" class="client-link cbp-so-side cbp-so-side-bottom">

										<span class="logo-hover" style="opacity: 0;"><img src="img/client/logo10-hover.png" alt="" class="hoverdim"></span>

										<img src="img/client/logo10.png" class="client-logo" alt="">

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

		<img src="img/sep-background.png">

	<!-- Caractéristiques -->

	<section id="features">

		<div class="headline">

			<div class="container">

				<div class="row cbp-so-section">

					<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	

						<img src="img/categories/caracteristiques.png">

						<img src="img/slogan-test-down-caracteristiques.png">

					</div>

				</div>

			</div>

			<span class="headline-arrow"></span>

		</div>

			<div class="flexslider">

				<ul class="slides">

					<li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">

						<div class="image-cap">

							<img src="img/features/img1.png" alt="">

						</div>

						<div class="text-cap">

							<h4>A REMPLIR</h4>

							<p>

							Description de la caractéristique

							</p>

							<a href="#" class="text-link">Lire l'article en entier</a>

						</div>

						<img src="img/features/bg.jpg" alt="">					

					</li>

					<li style="width: 100%; float: left; margin-right: -100%; position: relative;">

						<div class="image-cap">

							<img src="img/features/img3.png" alt="">

						</div>

						<div class="text-cap">

							<h4>A REMPLIR</h4>

							<p>

							Description de la caractéristique

							</p>

							<a href="#" class="text-link">Lire l'article en entier</a>

						</div>				

						<img src="img/features/bg1.jpg" alt="">

					</li>

					<li style="width: 100%; float: left; margin-right: -100%; position: relative;">

						<div class="image-cap">

							<img src="img/features/img2.png" alt="">

						</div>

						<div class="text-cap">

							<h4>A REMPLIR</h4>

							<p>

							Description de la caractéristique

							</p>

							<a href="#" class="text-link">Lire l'article en entier</a>

						</div>				

						<img src="img/features/bg2.jpg" alt="">

					</li>

					<li style="width: 100%; float: left; margin-right: -100%; position: relative;">

						<div class="image-cap">

							<img src="img/features/img4.png" alt="">

						</div>

						<div class="text-cap">

							<h4>A REMPLIR</h4>

							<p>

							Description de la caractéristique

							</p>

							<a href="#" class="text-link">Lire l'article en entier</a>

						</div>				

						<img src="img/features/bg3.jpg" alt="">

					</li>					

				</ul>

			<ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a>2</a></li><li><a>3</a></li><li><a>4</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>

	</section>

	<!-- Fin : Caractéristiques -->

	

	<!-- Citations -->

	<div id="testimonials" class="contain dark-bg">

		<div class="container">

			<div class="row margintop10 cbp-so-section">

				<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">

					<ul class="ticker">

						

						

												

					<li style="opacity: 1;">

							<div class="testimoni">

								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar2.png" alt=""></a>

								<blockquote>

									A REMPLIR

								</blockquote>

								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>

							</div>

						</li><li style="display: none;">

							<div class="testimoni">

								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar3.png" alt=""></a>

								<blockquote>

									A REMPLIR

								</blockquote>

								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>

							</div>

						</li><li style="display: none;">

							<div class="testimoni">

								<a href="#" class="testimoni-avatar"><img src="img/testimoni/avatar1.png" alt=""></a>

								<blockquote>

									A REMPLIR

								</blockquote>

								<span class="testimoni-author">PSEUDO - ROLE - Projet SLr</span>

							</div>

						</li></ul>

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

						<img src="img/categories/myteam.png">

						<img src="img/slogan-test-down-team.png">

					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-md-4 text-center">	

					<div class="team-image-wrapper">

						<div class="team-frame">

							<div class="team-profile" style="opacity: 0;">

								<h5>MEMBRE</h5>

								<p>ROLE dans SLr-Challenge</p>

								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt=""></a>

								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt=""></a>

							</div>

						</div>					

						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" style="
    margin-left: -7px;
    margin-top: -12px;
"></a>

					</div>						

				</div>

				<div class="col-md-4 text-center">	

					<div class="team-image-wrapper">

						<div class="team-frame">

							<div class="team-profile" style="opacity: 0;">

								<h5>MEMBRE</h5>

								<p>ROLE dans SLr-Challenge</p>

								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt=""></a>

								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt=""></a>

							</div>

						</div>						

						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" style="
    margin-left: -7px;
    margin-top: -12px;
"></a>

					</div>						

				</div>

				<div class="col-md-4 text-center">	

					<div class="team-image-wrapper">

						<div class="team-frame">

							<div class="team-profile" style="opacity: 0;">

								<h5>Membre</h5>

								<p>ROLE dans SLr-Challenge</p>

								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt=""></a>

								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt=""></a>

							</div>

						</div>						

						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" style="
    margin-left: -7px;
    margin-top: -12px;
"></a>

					</div>						

				</div>				

			</div>

			<div class="row">

				<div class="col-md-4 col-md-offset-2 text-center">	

					<div class="team-image-wrapper">

						<div class="team-frame">

							<div class="team-profile" style="opacity: 0;">

								<h5>MEMBRE</h5>

								<p>ROLE dans SLr-Challenge</p>

								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt=""></a>

								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt=""></a>

							</div>

						</div>					

						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" style="
    margin-left: -7px;
    margin-top: -12px;
"></a>

					</div>						

				</div>

				<div class="col-md-4 text-center">	

					<div class="team-image-wrapper">

						<div class="team-frame">

							<div class="team-profile" style="opacity: 0;">

								<h5>MEMBRE</h5>

								<p>ROLE dans SLr-Challenge</p>

								<a href="#"><img src="img/team/social/fb.png" class="e_bounce" alt=""></a>

								<a href="#"><img src="img/team/social/twitter.png" class="e_bounce" alt=""></a>

							</div>

						</div>						

						<a href="#" class="team-image"><img src="img/team/avatar1.png" alt="" style="
    margin-left: -7px;
    margin-top: -12px;
"></a>

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

						<img src="img/categories/screenshots.png">

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

				<ul class="portfolio-area row" style="height: 1200px;">

					<li class="portfolio-item" data-id="id-0" data-type="web">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-0" data-type="brand">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-1" data-type="apps">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>


					<li class="portfolio-item" data-id="id-2" data-type="web">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-3" data-type="graphic">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-4" data-type="graphic">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-5" data-type="brand">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					<li class="portfolio-item" data-id="id-6" data-type="brand">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					</li>

					<li class="portfolio-item" data-id="id-7" data-type="web">	 

						<div class="image-wrapper">

							<div class="image-caption" style="opacity: 0;">

								<a href="img/gallery/2.jpg" class="zoom"><img src="img/zoom.png" style="margin-top: 8px;"</img></a>
								
								<a href="img/gallery/2.jpg"><img src="img/zoom.png" style="margin-top: 120px;"</img></a>

								<div class="image-title"><a href="#">LEGENDE COURTE </a></div>

							</div>						

							<img src="img/gallery/2.jpg" class="img-gallery" alt="">

						</div>
					
					</li>

					</li>						

				</ul>

			</div>		

		</div>					

	</section>

	<!-- Fin : Update -->

	<img src="img/sep-background.png">

	<!-- Contact -->

	<section id="contact" class="primary-bg">

		<div class="headline">

			<div class="container">

				<div class="row cbp-so-section">

					<div class="col-md-10 col-md-offset-1 cbp-so-side cbp-so-side-top">	

						<img src="img/categories/contact.png">

						<img src="img/slogan-test-down-contact.png">

					</div>

				</div>

			</div>

			<span class="headline-arrow"></span>			

		</div>

		<div class="container">

			<div class="row">

				<div class="cfg-contactform" id="cfg-contactform-251">


<div class="cfg-contactform-content">




<div class="cfg-element-container">

	<label class="cfg-label" id="cfg-element-251-6-label" ><span class="cfg-label-value">Entrez votre prénom&nom :</span><span class="cfg-required">*</span></label>

	<div class="cfg-element-set" id="cfg-element-251-6-set" >
		<div class="cfg-element-content">
		<input type="text" class="cfg-type-text cfg-form-value " name="cfg-element-251-6" id="cfg-element-251-6"  />
		</div>
	</div>

	<div class="cfg-clear"></div>
</div>


<div class="cfg-element-container">

	<label class="cfg-label" id="cfg-element-251-3-label" ><span class="cfg-label-value">Entrez votre adresse e-mail :</span><span class="cfg-required">*</span></label>

	<div class="cfg-element-set" id="cfg-element-251-3-set" >
		<div class="cfg-element-content">
		<input type="text" class="cfg-type-text cfg-form-value " name="cfg-element-251-3" id="cfg-element-251-3"  />
		</div>
	</div>

	<div class="cfg-clear"></div>
</div>


<div class="cfg-element-container">

	<label class="cfg-label" id="cfg-element-251-4-label" ><span class="cfg-label-value">Écrivez votre message :</span></label>

	<div class="cfg-element-set" id="cfg-element-251-4-set" >
		<div class="cfg-element-content">
		<textarea class="cfg-type-textarea cfg-form-value " name="cfg-element-251-4" id="cfg-element-251-4" rows="10" ></textarea>
		</div>
	</div>

	<div class="cfg-clear"></div>
</div>


<div class="cfg-element-container">

	<div class="cfg-element-set" id="cfg-element-251-5-set" >
		<div class="cfg-element-content">
		<input type="submit" class="cfg-submit " name="cfg-element-251-5" id="cfg-element-251-5" value="Envoyer" style="
    font-family: verdana, 'Open Sans', sans-serif;
    margin-left: 42%;
    width: 100px;
">
		</div>
	</div>
</div>




<div class="cfg-loading">&nbsp;</div>

</div><!-- Contenu du formulaire de contact -->

</div><!-- Formulaire de contact -->

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

					<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-md cbp-so-side cbp-so-side-bottom" style="
    border: 3px solid #cacaca; background: none;
">Inscrivez-vous maintenant !</a>

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

						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><img src="img/social-facebook.png"></img></a>

						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><img src="img/social-twitter.png"></img></a>

						<a href="#" class="social-link cbp-so-side cbp-so-side-left"><img src="img/social-youtube.png"></img></a>

						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><img src="img/social-youtube.png"></img></a>

						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><img src="img/social-youtube.png"></img></a>

						<a href="#" class="social-link cbp-so-side cbp-so-side-right"><img src="img/social-youtube.png"></img></a>

					</div>					

					<p class="cbp-so-side cbp-so-side-bottom">2014 © Copyright <a href="#" style="
    color: #000;
">SLr-Challenge</a> All rights Reserved.</p>

				</div>

			</div>

		</div>	

	</footer>

	<!-- End footer -->

  	

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

