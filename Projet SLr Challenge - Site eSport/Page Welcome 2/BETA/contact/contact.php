<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// Destinataire 
$destinataire = 'admin@slr-challenge.fr';
 
// Copie du mail
$copie = 'oui';
 
// Action du formulaire 
$form_action = 'index.html#contact';
 
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
 
/*
 * Nettoyage et Enregistrement
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}
 
	$text = nl2br($text);
	return $text;
};
 
/*
 * Vérification de la syntaxe
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}
 
// Récupèration des champs.
$nom     = (isset($_POST['name']))     ? Rec($_POST['name'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
 
// Vérification des variable
$email = (IsEmail($email)) ? $email : ''; // Vide = erroné ou alors non vide = correct
$err_formulaire = false; // Remplir le formulaire en cas d'erreur
 
if (isset($_POST['Submit']))
{
	if (($nom != '') && ($email != '') && ($message != ''))
	{
		// Envoyer le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();
 
		// Copie au visiteur
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};
 
		// Remplacement des caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('&lt;br&gt;','',$message);
		$message = str_replace('&lt;br /&gt;','',$message);
		$message = str_replace("&lt;","&lt;",$message);
		$message = str_replace("&gt;","&gt;",$message);
		$message = str_replace("&amp;","&",$message);
 
		// Envoi du mail
		if (mail($cible, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// Si 3 variables sont vides ...
		echo '<p>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))
 
if (($err_formulaire) || (!isset($_POST['Submit'])))
{
	// Afficher le formulaire
	echo '
	<form id="contact" method="post" action="'.$form_action.'">
	<fieldset><legend>Vos coordonnées</legend>
		<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
		<p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
	</fieldset>
 
	<fieldset><legend>Votre message :</legend>
		<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
		<p><label for="message">Message :</label><textarea id="message" name="message" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
	</fieldset>
 
	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
	</form>';
};
?>