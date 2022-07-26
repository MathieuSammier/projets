<?php

require("./include/config.php");

// Redirige l'utilisateur s'il est déjà identifié
if(isset($_COOKIE["id_welcome"]))
{
     header("Location: account.php");
}
else
{
     
     // Formulaire visible par défaut
     $masquer_formulaire = false;
     
     // Une fois le formulaire envoyé
     if(isset($_POST["connexion"]))
     {
          
          // Vérification de la validité des champs
          if(!preg_match("/^[A-Za-z0-9_]{3,20}$/", $_POST["login"]))
          {
               $message = "Votre nom d'utilisateur doit comporter entre 3 et 20 caractères<br />\n";
               $message .= "L'utilisation de l'underscore est autorisée";
          }
          elseif(!preg_match("/^[A-Za-z0-9]{5,32}$/", $_POST["mdp"]))
          {
               $message = "Votre mot de passe doit comporter entre 5 et 32 caractères";
          }
          else
          {
               
               // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
               require("./include/connexion.php");
               
               // Sélection de l'utilisateur concerné
               $result = mysql_query("SELECT id, login, password FROM membre_welcome WHERE login = "$_POST["login"]);
               
               // Si une erreur survient
               if(!$result)
               {
                    $message = "Une erreur est survenue lors de la tentative de connexion";
               }
               else 
               {
                    
                    // Si aucun utilisateur n'a été trouvé
                    if(mysql_num_rows($result) == 0)
                    {
                         $message = "Le nom d'utilisateur ".$_POST["login"]." n'existe pas";
                    }
                    else
                    {
                         
                         // Récupération des données
                         $row = mysql_fetch_array($result);
                              
                              // Vérification du mot de passe
                              if(md5($_POST["mdp"]) != $row["password"])
                              {
                                   $message = "Votre mot de passe est incorrect";
                              }
                              else
                              {
                                   
                                   // Définition du temps d'expiration des cookies
                                   $expiration = empty($_POST["CA"]) ? 0 : time() + 90 * 24 * 60 * 60;
                                   
                                   // Création des cookies
                                   setcookie("id_welcome", $row["id"], $expiration, "/");
                                   setcookie("login", $row["login"], $expiration, "/");
								//   if($row['admin'] == 1)
                                //  {
										setcookie("admin", $row["admin"], $expiration, "/");
								//   }
                                   // Fermeture de la connexion à la base de données
                                   mysql_close();
                                   
                                   // Redirection de l'utilisateur
                                   header("Location: account.php");
                                   
                              }
                    }
                    
               }*/
               
               // Fermeture de la connexion à la base de données
               mysql_close();
               
          }
          
     }
     
}

?>
<html>
<header>
						<ul id="menu">
							<li class="first"><a href="../index.php">Accueil</a></li>
							<li><a href="../infos.html">Infos</a></li>
							<li><a href="../tournois/index.php">Tournois</a></li>
							<li><a href="../About.html">Contact</a></li>
							<li><a href="./register.php">Inscription</a></li>
							<li id="menu_active"><a href="./connexion.php">Connexion</a></li>
						</ul>
</head>

<body>
	<h1>Connexion</h1>
<?php

if($module_connexion == "OFF")
{
	echo"Le module Connexion est actuellement désactivé.";
}
else
{
	if(isset($message)) 
	{ 
		?><p><?php echo $message; ?></p><?php
	} 
		if($masquer_formulaire != true) 
		{ 
			?>
			<form id="connexion" action="http://<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"]; ?>" method="post">     
				<div class="wrapper">
					<span>login :</span> <input class="input" type="text" name="login" />
				</div>
				<div class="wrapper">
					<span>Mot de passe :</span> <input class="input" type="password" name="mdp" />
				</div>
				<div class="wrapper">
					<input type="checkbox" name="CA" />
						Se connecter automatiquement à  chaque visite
				</div>
				<div class="wrapper">
					<input type="submit" class="button1" name="connexion" value="Envoyer" />
				</div>
			</form>
			
			<p>Pas encore inscrit ? <a href='./sign.php'>s'inscrire !</a></p>
			<?php 
		} 
}	
?>
</body>

</html>