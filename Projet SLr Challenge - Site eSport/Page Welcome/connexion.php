<?php
// Standard ISO-8859-1
header('Content-type: text/html; charset=UTF-8');

/* Supprission des stripslashes&antislashes */
function Verif_magicquotes ($chaine) {
	if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);
		return $chaine;
}

// Réponse
$message = null;

// If form=post
if (isset($_POST['pseudo'])) {
    /* Récup des variables */
    $pseudo = (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '')? Verif_magicquotes($_POST['pseudo']) : null;
    $pass = (isset($_POST['pass']) && trim($_POST['pass']) != '')? Verif_magicquotes($_POST['pass']) : null;

    // Si $pseudo et $pass diff de "null"
    if(isset($pseudo,$pass)) {
    	//hachage du mdp
    	$pass = sha1($pass);

         /* Connexion au serveur */
		 $username = "slrchallbdd";
		 $password = "chall14slr";

         try {
         	$bdd = new PDO('mysql:host=mysql51-130.perso;dbname=slrchallbdd', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	         // MySql Standard ISO-8859-1)
	         $bdd->query("SET NAMES 'utf8'");

	        $req =$bdd ->prepare("SELECT * FROM membre_welcome WHERE pseudo = :nom AND pass = :pass");
	        $req->execute(array('nom' => $pseudo, 'pass' => $pass));

	         while ($donnees = $req->fetch()){
		         	$nom = $donnees['pseudo'];
		         }
		         $message = $nom;
	         // Les valeurs pour $resultat;
	         if (isset($nom)) {

	                 /* Démarrage de $_SESSION['login']. */
	                 session_start();
	                 $_SESSION['login'] = $pseudo;

	                 // Redirection
	                 header("Location : index.php");
	         } else {		// Le pseudo ou  mdp incorrect
				$message = 'Le pseudo ou le mot de passe sont incorrect';
			 }
		} catch (Exception $e){
			$message = "ERREUR! : ".$e->getMessage();
		}
	} else {  //pseudo ou mot de passe n'est pas rempli
    	$message = 'Les champs Pseudo et Mot de passe doivent Ãªtre remplis.';
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

	<head>
		<meta charset="utf-8">
		<title>SLr-Challenge | Connexion !</title>

		<!-- Pour Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Informations -->
		<meta name="mots" content="challenge, slr, esport, sport, jeux vidéos, tournois, ligues, welcome, abonnements">
		<meta name="description" content="La page de lancement du projet SLr-Challenge !">
		<meta name="auteur" content="SLr">

		<!-- CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
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
							<li><a id="GoToHome" class="selected-nav" href="http://slr-challenge.fr/index.php">Retour &agrave; l'accueil</a></li>
							<li><a id="GoToCo" href="http://slr-challenge.fr/register.php">S'inscrire</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div id = "connexion" class="sign" style="text-align: center; margin-top: 10%;">
		    <form action = "#" method="post">
			    <h1>Connexion</h1>
				<br></br>
			    <p><label for = "pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" style="margin-left: 2%; border: solid 2px #c01414; border-radius: 8px;"></p>
			    <p><label for = "pass">Mot de passe : </label><input type="password" name="pass" id="pass" style="margin-left: 2%; border: solid 2px #c01414; border-radius: 8px;"></p>
			    <p><input type="submit" value="Envoyer" id = "valider" style="background: none; color: #000000; border-radius: 6px; border: solid 3px #333; margin-top: 1%;"></p>
		    </form>
		    <p id = "message"><?php if(isset($message)) echo $message ?></p>
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
</html>