<?php
include('config.php');
//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['username']))
{
	//On le deconecte en supprimant simplement les sessions username et userid
	unset($_SESSION['username'], $_SESSION['userid']);
	
printf('<meta http-equiv="refresh" content="0; URL=index.php">');

}
else
{
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['pseudo'], $_POST['mdp']))
	{
               
               // S�lection de l'utilisateur concern�
               $result = mysql_query("
                    SELECT id, pseudo, password, admin
                    FROM alpha_users
                    WHERE pseudo = '" . $_POST["pseudo"] . "'
               ");
               
               // Si une erreur survient
               if(!$result)
               {
                    $message = "Une erreur est survenue lors de la tentative de connexion";
               }
               else
               {
                    
                    // Si aucun utilisateur n'a �t� trouv�
                    if(mysql_num_rows($result) == 0)
                    {
                         $message = "Le nom d'utilisateur " . $_POST["pseudo"] . " n'existe pas";
                    }
                    else
                    {
                         
                         // R�cup�ration des donn�es
                         $row = mysql_fetch_array($result);
                              
                              // V�rification du mot de passe
                              if(md5($_POST["mdp"]) != $row["password"])
                              {
                                   $message = "Votre mot de passe est incorrect";
                              }
                              else
                              {
                                   /*    - UTILISATION DES COOKIES   
								   
                                   // D�finition du temps d'expiration des cookies
                                   $expiration =
                                        empty($_POST["CA"]) ? 0 : time() + 90 * 24 * 60 * 60;
                                   
                                   // Cr�ation des cookies
                                   setcookie("id", $row["id"], $expiration, "/");
                                   setcookie("pseudo", $row["pseudo"], $expiration, "/");
								//   if($row['admin'] == 1)
                                //  {
										setcookie("admin", $row["admin"], $expiration, "/");
								//   }
                                   // Fermeture de la connexion � la base de donn�es
                                   mysql_close();
                                   
                                   // Redirection de l'utilisateur
                                   header("Location: account.php");
								   
                                          - UTILISATION DES COOKIES    */
										  
								   //On enregistre son pseudo dans la session username et son identifiant dans la session userid
								   $_SESSION['username'] = $_POST["pseudo"];
								   $_SESSION['userid'] = $row['id'];

								   printf("<meta http-equiv=\"refresh\" content=\"0; URL=conv.php\">");	  
										  
										  
								   // Fermeture de la connexion � la base de donn�es
								   mysql_close();
                              }
                    }
                    
               }
               
               // Fermeture de la connexion � la base de donn�es
               mysql_close();
               
          }
	}

}
		  ?>
		  
		  <?php if(isset($message)) { ?>
     <p><?php echo $message; ?></p>
<?php } 