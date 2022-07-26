<a href="index.php">Accueil</a><br><a href="connexion.php">Déconnexion</a><br><br>
<?php
include('config.php');

$id = $_SESSION['userid'];
$result = mysql_query("SELECT * FROM alpha_users WHERE `id`='$id'");
$data = mysql_fetch_array($result);


	if($data['admin'] == 1)
	{
		$statut = "Admin";
	}
	else
	{
		$statut = "Utilisateur Normal";
	}
	if($data['VIP'] == 1)
	{
		$statut2 = "VIP";
	}
	$email = $data['mail'];

	$ip = $data['ip'];
	$bBonjour = "Bienvenue " . $_SESSION['pseudo'] . "! </br>";
?>
<p><?php echo $bBonjour;?></p>
<p>Informations liées à votre compte:</p>
					<div>
						<ul>
							<li><a>Votre Email:</a>                      <?php echo $email; ?></li>
							<li><a>La date de votre inscription:</a>     <?php echo $date; ?></li>
							<li><a>Votre IP:</a>                         <?php echo $ip; ?></li>
							<li><a>Statut de votre compte:</a>           <?php echo $statut $statut2; ?> </li>

						</ul>
					</div>