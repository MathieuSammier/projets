<?php

// Standard ISO-8859-1)

header('Content-type: text/html; charset=UTF-8');



/* R�cup�ration des variables */

function Verif_magicquotes ($chaine) 

{

if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);



return $chaine;

} 



// Message de r�ponse

$message = null;





// If form=post

if (isset($_POST['pseudo'])) 

{



    /* R�cup�ration des variables

    Teste l'existence les données post en vérifiant qu'elles existent, qu'elles sont non vides et non composées uniquement d'espaces.

    (Ce dernier point est facultatif et l'on pourrait se passer d'utiliser la fonction trim())

    En cas de succès, on applique notre fonction Verif_magicquotes pour (éventuellement) nettoyer la variable */

    $pseudo = (isset($_POST['pseudo']) && trim($_POST['pseudo']) != '')? Verif_magicquotes($_POST['pseudo']) : null;

    $pass = (isset($_POST['pass']) && trim($_POST['pass']) != '')? Verif_magicquotes($_POST['pass']) : null;

    



    // If $pseudo & $pass diff de "null"

    if(isset($pseudo,$pass)) 

    {

         /* Connexion au serveur */

         $hostname = "mysql51-130.perso";

		 $database = "slrchallbdd";

		 $username = "slrchallbdd";

		 $password = "chall14slr";

    

         $connection = mysql_connect($hostname, $username, $password) or die(mysql_error());



         // Connexion � la BDD

         mysql_select_db($database, $connection);

    

         // MySql Standard ISO-8859-1)

         mysql_query("SET NAMES 'utf8'");

    

         // Pr�paration des donn�es

         $nom = mysql_real_escape_string($pseudo);

         $password = mysql_real_escape_string($pass);

    

    

         // Pseudo de la table = pseudo post-->form

         $requete = "SELECT count(*) as nb FROM membre_welcome WHERE pseudo = '".$nom."'";

    

         // Exécution de la requête

         $req_exec = mysql_query($requete) or die(mysql_error());

    

         // Création du tableau résultat

         $resultat = mysql_fetch_assoc($req_exec);

    



         // nb --> count(*) et retourne le résultat de la requête dans le tableau $resultat; 

         if (isset($resultat['nb']) && $resultat['nb'] == 0) 

         // If 0 --> pseudo --> Enregistrement

         {

             // Insert

             $insertion = "INSERT INTO membre_welcome(pseudo,pass,date_inscription) VALUES('".$nom."', '".$password."', NOW())";

         

             // Exécution de la requête d'insertion

             $inser_exec = mysql_query($insertion) or die(mysql_error());

        

             /* If insert --> ok  */

             if ($inser_exec === true) 

             {

                 /* Démarrage de $_SESSION['login'] */

                 session_start();

                 $_SESSION['login'] = $pseudo;

            

                 // Redirection

                 $message = 'Votre inscription est enregistrée. <a href = "connexiontest.php">Cliquez ici pour vous connecter</a>';

             }    

         }

         else

         {   // If pseudo is already used

             $message = 'Ce pseudo est déjà utilisé, changez-le.';

         }

    }

    else 

    {    // Pseudo ou mdp n'est pas rempli

         $message = 'Les champs "Pseudo" et "Mot de passe" doivent être remplis.';

    }

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulaire d'inscription</title>

<!-- Bootstrap core CSS -->

    <link href="cssco/bootstrap.min.css" rel="stylesheet">



    <!-- Styles de bootstrap -->

    <link href="cssco/overwrite.css" rel="stylesheet">



	<!-- Police : Awesome -->

	<link href="cssco/font-awesome.css" rel="stylesheet">


	<link href="cssco/font-awesome-set.css" rel="stylesheet">



	<!-- Style personnalis� -->

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

#inscription {

width:380px;

background:#FFFFFF;

margin:20px auto;

font-family: Arial, Helvetica, sans-serif;

font-size:1em;

margin-top: 122px

}

#inscription h1 {

text-align:center;

font-size:1.2em;

padding-bottom:5px;

margin-bottom:15px;

letter-spacing:0.05em;

}

#inscription p {

padding-top:15px;

padding-right:50px;

text-align:right;

}

#inscription input {

margin-left:30px;

width:150px;

}

#inscription #valider {

width:155px;

font-size:0.8em;

}

#inscription #message {

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
			
			<a href='connexiontest.php'><img src='img/navbar-cat/seco.png' style='margin-top: -35px; margin-left: 1090px'></a>
			
			</div>								

			</div><!--/.nav-collapse -->

		</header></div>		

	

	<!-- End header -->

<body>

<div id = "inscription">

    <form action = "#" method = "post">

    <h1>Inscription</h1>

    <p><label for = "pseudo">Pseudo : </label><input type = "text" name = "pseudo" id = "pseudo" /></p>

    <p><label for = "pass">Mot de passe : </label><input type = "password" name = "pass" id = "pass" /></p>

    <p><input type = "submit" value = "Envoyer" id = "valider" /></p>

    </form>

    <p id = "message"><?php if(isset($message)) echo $message ?></p>

</div>

</body>

</html>