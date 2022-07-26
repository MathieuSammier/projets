<?php
require("./include/config.php");

// Redirige l'utilisateur s'il est d? identifi?
if(isset($_COOKIE["id"]))
{
     header("Location: index.php");
}
else
{
     
     // Formulaire visible par d?ut
     $masquer_formulaire = false;
     
     // Une fois le formulaire envoy?     
	 if(isset($_POST["inscription"]))
     {
          
          // V?fication de la validit?es champs
          if(!preg_match("/^[A-Za-z0-9_]{3,20}$/", $_POST["login"]))
          {
               $message = "Votre nom d'utilisateur doit comporter entre 3 et 20 caract&egrave;res<br />\n";
               $message .= "L'utilisation de l'underscore est autoris&eacute;e";
          }
          elseif(!preg_match("/^[A-Za-z0-9]{5,}$/", $_POST["mdp"]))
          {
               $message = "Votre mot de passe doit comporter entre 5 et 32 caract&egrave;res";
          }
          elseif($_POST["mdp"] != $_POST["C_mdp"])
          {
               $message = "Votre mot de passe n'a pas &eacute;t&eacute; correctement confirm&eacute;";
          }
          elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,4}$/",
               $_POST["mail"]))
          {
               $message = "Votre adresse e-mail n'est pas valide";
          }
          else
          {
               
               // Connexion ?a base de donn?
               // Valeurs ?odifier selon vos param?es configuration
               require("./include/connexion.php");
               
               // V?fication de l'unicit?u nom d'utilisateur et de l'adresse e-mail
               $result = mysql_query("
                    SELECT login
                         , mail
                    FROM membre_welcome
                    WHERE login = '" . $_POST["login"] . "'
                    OR mail = '" . $_POST["mail"] . "'
               ");
               
               // Si une erreur survient
               if(!$result)
               {
                    $message = "Erreur d'acc&egrave;s &agrave; la base de donn&eacute;es lors de la v&eacute;rification d'unicit&eacute;";
               }
               else
               {
                    
                    // Si un enregistrement est trouv?                   
					if(mysql_num_rows($result) > 0)
                    {
                         
                         while($row = mysql_fetch_array($result))
                         {
                              
                              if($_POST["login"] == $row["login"])
                              {
                                   $message = "Le pseudo " . $_POST["login"];
                                   $message .= " est d&eacute;j&agrave; utilis&eacute;.";
                              }
                              elseif($_POST["mail"] == $row["mail"])
                              {
                                   $message = "L'adresse e-mail " . $_POST["mail"];
                                   $message .= " est d&eacute;j&agrave; utilis&eacute;.";
                              }
                              
                         }
                         
                    }
                    else
                    {
                         
                         
                         // Cr?ion du compte utilisateur
                         $result = mysql_query("
                              INSERT INTO membre_welcome(
                                   login
                                   , password
                                   , mail
                                   , date_Inscription
								   , ip
                              )
                              VALUES(
                                   '" . $_POST["login"] . "'
                                   , '" . md5($_POST["mdp"]) . "'
                                   , '" . $_POST["mail"] . "'
                                   , '" . time() . "'
								   , '" . $_SERVER['REMOTE_ADDR'] . "'
                              )
                         ");
						 
                         
                         // Si une erreur survient
                         if(!$result)
                         {
                              $message = "Erreur d'acc&egrave;s &agrave; la base de donn&eacute;es lors de la cr&eacute;ation du compte utilisateur";
                         }
                         else
                         {
                              
                              // Envoi du mail d'activation
                              $sujet = "SLr-Challenge | Inscription sur notre page Welcome";
                              
                              $message = "Merci pour votre inscription sur notre page (Welcome) !<br />";
							  $message .= "Voici vos informations de connexion: <br />";
							  $message .= "Pseudo : " . $_POST['login'] . "<br />";
							  $message .= "Mot de passe : " . $_POST['mdp'] . "<br />";
							  $message .= "&agrave; bientot !<br /><br />";
							  $message .= "Voici votre ip: " . $_SERVER['REMOTE_ADDR'];
                              
                              // Si une erreur survient
                              if(!@mail($_POST["mail"], $sujet, $message))
                              {
                                   $message = "Une erreur est survenue lors de l'envoi du mail d'inscription<br />\n";
                                   $message .= "Veuillez contacter l'administrateur afin de v&eacute;rifier si cela ne vous posera pas de probl&egrave;mes.";
                              }
                              else
                              {
                                   
                                   // Message de confirmation
                                   $message = "Votre compte utilisateur a correctement &eacute;t&eacute; cr&eacute;er<br />\n";
                                   $message .= "Un email vient d'&ecirc;tre envoy&eacute; avec vos informations de connexion.";
                                   
                                   // On masque le formulaire
                                   $masquer_formulaire = true;
                                   
                              }
                              
                         }
                         
                    }
                    
               }
               
          }
          
          // Fermeture de la connexion ?a base de donn?
          
          
     }
     
}

?>
<html>
						
	<h3>Formulaire d'inscription</h3>
	
<?php	
if($module_inscription_welcome == "OFF")
{
	echo"Le module d'inscription est actuellement d&eacute;sactiv&eacute;.";
}
else
{
	
	if(isset($message)) 
	{ ?>
		<p><ul><li><?php echo $message; ?></li></ul></p>
		<?php 
	} 
	
	if($masquer_formulaire != true) 
	{ ?>
		<form id="inscription" action="http://<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"]; ?>" method="post" style="margin-top: 200px;">
		
				<span>Pseudo :</span> <input class="input" type="text" name="login" placeholder="Votre login"/></br>
	
				<span>Mot de passe :</span> <input class="input" type="password" name="mdp" /></br>

				<span>Confirmez votre mot de passe :</span> <input class="input" type="password" name="C_mdp" /></br>

				<span>Adresse e-mail :</span> <input class="input" type="text" name="mail" placeholder="Mon.mail@mail.com"/></br>

				<input type="reset" class="button1" onClick="document.getElementById('ContactForm').reset()"></a>   
			
				<input type="submit" class="button1" name="inscription" value="S'inscrire" /></br>

		</form>
	
		<p>D&eacute;j&agrave; inscrit ? <a href='./connexion.php'>Se connecter !</a></p>
		<?php 
		
	} 
} ?>
</body>
</html>