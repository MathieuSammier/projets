<?php
require("./include/config.php");

if(isset($_COOKIE["id"]))
{
	require("./include/connexion.php");

	$sql = " SELECT * FROM membre_welcome WHERE id = ".$_COOKIE["id"];
	$requete = mysql_query($sql) or die ("Requete impossible ".mysql_error());
	$data = mysql_fetch_array($requete);
	$date = date('d/m/Y à H\hi', $data['date_inscription']);

	
	$id = $_COOKIE["id"];
	$email = $data['mail'];
	$ip = $data['ip'];
	$bBonjour = "Bienvenue " . $_COOKIE['login'] . " ! </br>";
	
}



?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nomsite;?> Mon Compte</title>
</head>

<body>
		<h1>SLR - Challenge - [BETA]</h1>

		<?php
			if(isset($_COOKIE["id"]))
			{
		?>
				<p><strong><?php echo $bBonjour;?></strong></p>
				<p><strong>Informations liées à votre compte:</strong></p>
					<ul>
						<li>Votre Email: <?php echo $email; ?></li>
						<li>La date de votre inscription: <?php echo $date; ?></li>
						<li>Votre IP: <?php echo $ip; ?></li>
					</ul>
				<p><strong>Ajouter des points à mon compte:</strong></p>
					<ul>
						<li>Via le lien referral: <a href="http://slr-challenge.fr/SLr-Romain/index.php?r=<?php echo $id;?>">http://slr-challenge.fr/SLr-Romain/index.php?r=<?php echo $id;?></a></li>
					</ul>
				

		<?php 
			}
			else
			{
				include("./include/non_connecte.php");
			}
		?>

</body>
</html>
