<?php

// Standard ISO-8859-1)
header('Content-type: text/html; charset=UTF-8');

/* Récupération des variables */
function Verif_magicquotes ($chaine) {
	if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);
		return $chaine;
}

// Message de réponse
$message = null;


// If form=post
if (isset($_POST['pseudo'])) {
    // Récupération des variables
    $pseudo = (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '')? Verif_magicquotes($_POST['pseudo']) : null;
    $pass = (isset($_POST['pass']) && trim($_POST['pass']) != '')? Verif_magicquotes($_POST['pass']) : null;
    if (isset($_POST['mail']) && trim($_POST['mail']) != '' && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]+.[a-z]{2,4}$#",$_POST['mail'])){
    	$mail = Verif_magicquotes($_POST['mail']);

	    // If $pseudo & $pass diff de "null"
	    if(isset($pseudo,$pass,$mail)) {
	    	 //hachage du mdp
	    	 $pass = sha1($pass);

	         /* Connexion au serveur */
			 $username = "slrchallbdd";
			 $password = "chall14slr";

			 try {
	         	$bdd = new PDO('mysql:host=mysql51-130.perso;dbname=slrchallbdd', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		         // MySql Standard ISO-8859-1)
		         $bdd->query("SET NAMES 'utf8'");

		         // Préparation des données
		         $req = $bdd->prepare("SELECT COUNT(*) as nb FROM membre_welcome WHERE pseudo = :nom OR mail = :mail");
		         $req->execute(array('nom' => $pseudo, 'mail' => $mail));
		         while ($donnees = $req->fetch()){
		         	$resultat = $donnees['nb'];
		         }

		         // nb --> count(*) et retourne le rÃ©sultat de la requÃªte dans le tableau $resultat;
		         // If 0 --> pseudo --> Enregistrement
		         if (isset($resultat) && $resultat == 0) {
		             // Insert
		             $req = $bdd->prepare("INSERT INTO membre_welcome(pseudo,pass,mail,date_inscription) VALUES(:nom, :password, :mail, NOW())");
		             $req->execute(array('nom' => $pseudo, 'password' => $pass, 'mail' => $mail));

		             	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
							$passage_ligne = "\r\n";
						}
						else {
							$passage_ligne = "\n";
						}

						/* RENTRE LE CODE HTML DU MESSAGE ENTRE LES GUILLEMET DE LA VARIBLE $message_html */
						$message_html = "<p> Bienvenue sur la page de lancement de SLrMats, <!-- PHP / Pseudo --> !
    <br/>
    Vous pouvez désormais profiter des avantages offer à ceux qui nous soutiennent en cliquant sur le lien ci-dessous et en vous connectant à votre compte.
    <br/>
    https://www.slr-challenge.fr/index
    <br/>
    SLr-Challenge est une plate-forme permettant de créer et de participer à différends tournois sur divers jeux vidéos. Nous souhaitons permettre aux joueur
    de s'amuser et découvrir l'univers de l'e-Sport tout en profitant de nos fonctionnalités ! Actuellement le site est en construction, n'hésitez pas à vous
    connecter régulièrement sur notre page de lancement afin d'avoir différentes informations sur notre projet !
    <br/>
    A bientôt !
    L'équipe SLr.
    <br/>
    Vous recevez cet e-mail suite à votre inscription, notre adresse email est : admin@slr-challenge.fr
</p> <br/>
<p>
    --------------------------------------------------------
</p> <br/>
<p>
    Veuillez ne pas répondre à cet email, votre réponse ne sera pas recepté !
</p>";

						$boundary = "-----=".md5(rand());

						$sujet = "Bienvenue dans la communautée SLr-Challenge";

						$header= "From: \"SLr-Challenge\"<slrchall@xxlplan.ovh.net>".$passage_ligne;
						$header.= "Reply-to: \"SLr-Challenge\"<slrchall@xxlplan.ovh.net>" .$passage_ligne;
						$header.= "MIME-Version: 1.0".$passage_ligne;
						$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

						$message = $passage_ligne."--".$boundary.$passage_ligne;
						$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bits".$passage_ligne;
						$message.= $passage_ligne.$message_html.$passage_ligne;
						$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
						$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

						mail($mail,$sujet,$message,$header);

		             	//creation de la session
		                 session_start();
		                 $_SESSION['login'] = $pseudo;

		                 // Redirection
		                header("Location: index.php");

		         } else {   // If pseudo is already used
					$message = 'Ce pseudo ou ce mail est dÃ©jÃ utilisÃ©, changez-le.';
		         }

	         } catch (Exception $e) {	//erreur a la connexion MYSQL
	         	$message = "ERREUR!: ".$e->getMessage();
	         	die();
	         }

	    } else {    // Pseudo ou mdp n'est pas rempli
			 $message = 'Les champs "Pseudo" "Mot de passe" et mail doivent Ãªtre remplis.';

		}
	}else {
		$message = "veuillez entré un email valide. (exemple@gmail.com)";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SLr-Challenge | Inscription !</title>

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

<!-- Start header -->
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
						<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo" role="banner" style="width: 140px;"></a>
					</div>

					<!-- Menu -->
					<nav id="navigation-menu" class="collapse navbar-collapse" role="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li><a id="GoToHome" class="selected-nav" href="index.php">Retour &agrave; l'accueil</a></li>
							<li><a id="GoToCo" href="connexion.php">Se connecter</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>



		<div id="inscription" class="sign" style=" text-align: center;margin-top: 10%;">
		    <form action = "register.php" method = "post">
		    <h1>Inscription</h1>
				<br></br>
			    <p><label for = "pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" style="margin-left: 2%; border: solid 2px #c01414; border-radius: 8px;"></p> 
			    <p><label for = "pass">Mot de passe : </label><input type="password" name="pass" id="pass" style="margin-left: 2%; border: solid 2px #c01414; border-radius: 8px;"></p>
				<p><label for = "pass">Email: </label><input type="mail" name="mail" id="mail" style="margin-left: 2%; border: solid 2px #c01414; border-radius: 8px;"></p>
				<p><input type="submit" value="Envoyer" id="valider" style="background: none; color: #000000; border-radius: 6px; border: solid 3px #333; margin-top: 1%;"></p>
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