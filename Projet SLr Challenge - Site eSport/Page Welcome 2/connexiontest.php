<?php

// Standard ISO-8859-1

header('Content-type: text/html; charset=UTF-8');



/* Supprission des stripslashes&antislashes */

function Verif_magicquotes ($chaine) 

{

if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);



return $chaine;

} 



// Réponse

$message = null;





// If form=post

if (isset($_POST['pseudo'])) 

{



    /* Récup des variables */

    $pseudo = (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '')? Verif_magicquotes($_POST['pseudo']) : null;

    $pass = (isset($_POST['pass']) && trim($_POST['pass']) != '')? Verif_magicquotes($_POST['pass']) : null;

    



    // Si $pseudo et $pass diff de "null"

    if(isset($pseudo,$pass)) 

    {

         /* Connexion au serveur */

         $hostname = "mysql51-130.perso";

		 $database = "slrchallbdd";

		 $username = "slrchallbdd";

		 $password = "chall14slr";

    

         $connection = mysql_connect($hostname, $username, $password) or die(mysql_error());



         // Connexion à la BDD

         mysql_select_db($database, $connection);

    

         // MySql Standard ISO-8859-1)

         mysql_query("SET NAMES 'utf8'");

    

         // Prépa des données

         $nom = mysql_real_escape_string($pseudo);

         $password = mysql_real_escape_string($pass);

    

    

         /* Pseudo & mdp de la table = pseudo et mdp du form*/

        $requete = "SELECT * FROM membre_welcome WHERE pseudo = '".$nom."' AND pass = '".$password."'";  

    

         // Exécution de la reqt

         $req_exec = mysql_query($requete) or die(mysql_error());

    

         // Création du tableau résult

         $resultat = mysql_fetch_assoc($req_exec); 



         // Les valeurs pour $resultat; 

         if (isset($resultat['pseudo'],$resultat['pass']))  

               {

                 /* Démarrage de $_SESSION['login']. */

                 session_start();

                 $_SESSION['login'] = $pseudo;

            

                 // Redirection

                 $message = 'Bonjour '.htmlspecialchars($_SESSION['login']).' <a href = "index.php">Cliquez ici pour aller Ã  index</a>';

                }

                else

                {   // Le pseudo ou  mdp incorrect

                $message = 'Le pseudo ou le mot de passe sont incorrect';

                } 



    }

    else 

    {  //pseudo ou mot de passe n'est pas rempli

    $message = 'Les champs Pseudo et Mot de passe doivent Ãªtre remplis.';

    }

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulaire de connexion</title>

<!-- Bootstrap core CSS -->

    <link href="cssco/bootstrap.min.css" rel="stylesheet">



    <!-- Styles de bootstrap -->

    <link href="cssco/overwrite.css" rel="stylesheet">



	<!-- Police : Awesome -->

	<link href="cssco/font-awesome.css" rel="stylesheet">


	<link href="cssco/font-awesome-set.css" rel="stylesheet">



	<!-- Style personnalisé -->

    <link href="cssco/style.css" rel="stylesheet">



	<!-- Police -->

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<link href="cssco/default.css" rel="stylesheet" type="text/css">

<style type="text/css">

<!--

body, p, h1,form, input {

margin:0;

padding:0;

}

body {

background-color:#FFFFFF

}

#connexion {

width:380px;

background:#FFFFFF;

margin:20px auto;

font-family: Arial, Helvetica, sans-serif;

font-size:1em;

margin-top: 122px

}

#connexion h1 {

text-align:center;

font-size:1.2em;

padding-bottom:5px;

margin-bottom:15px;

letter-spacing:0.05em;

}

#connexion p {

padding-top:15px;

padding-right:50px;

text-align:right;

}

#connexion input {

margin-left:30px;

width:150px;

}

#connexion #valider {

width:155px;

font-size:0.8em;

}

#connexion #message {

height:27px;

font-size:0.7em;

font-weight:bold;

text-align:center;

padding:10px 0 0 0;

}

-->

</style>

</head>

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

			</div>			
				<nav class="clearfix">
			
			<div class="navbar-collapse collapse">
			
				<ul class="clearfix">
			
			<ul class="nav navbar-nav">

					<li><a id="GoToHome" href="http://slr-challenge.fr/SLr-Mathieu/index#home" class="selected"><img src="img/navbar-cat/accueil.png"></a></li>				

				</ul>
				
				<a href="#" id="pull">Menu</a>  
			
			</ul></div></nav>

				<div class="navbar-right" style="

    margin-top: -30px;

">
			<a href='inscriptiontest.php'><img src='img/navbar-cat/inscription.png' style='margin-top: -35px; margin-left: 1090px'></a>
				
				</div>								

			</div><!--/.nav-collapse -->

		</header></div>		

	

	<!-- End header -->

<body>

<div id = "connexion">

    <form action = "#" method="post">

    <h1>Connexion</h1>

    <p><label for = "pseudo">Pseudo : </label><input type="text" name="pseudo" id="pseudo" /></p>

    <p><label for = "pass">Mot de passe : </label><input type="password" name="pass" id="pass" /></p>

    <p><input type="submit" value="Envoyer" id = "valider" /></p>

    </form>

    <p id = "message"><?php if(isset($message)) echo $message ?></p>

</div>

</body>

</html>