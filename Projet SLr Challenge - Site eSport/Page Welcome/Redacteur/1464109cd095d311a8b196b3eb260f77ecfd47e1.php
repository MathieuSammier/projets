<?php
	$erreur = "";
	if(isset($_POST['contenue']) && isset($_POST['Titre']) && isset($_FILES['image'])){
		$titre = $_POST['Titre'];
		$article = $_POST['contenue'];

		$username = "slrchallbdd";
		$password = "chall14slr";

		$uploaddir = '/home/slrchall/www/SLr-Mathieu/blog/img/';
		$uploadfile = $uploaddir .basename($_FILES['image']['name']);

		$filename = $_FILES['image']['name'];
		$extension = pathinfo($filename, PATHINFO_EXTENSION);

		if ($_FILES['image']['error']) {
          switch ($_FILES['image']['error']){
                   case 1: // UPLOAD_ERR_INI_SIZE
                   $erreur ="Le fichier dépasse 64Mo autorisé par le serveur";
                   break;
                   case 2: // UPLOAD_ERR_FORM_SIZE
                   $erreur = "Le fichier dépasse 2Mo";
                   break;
                   case 3: // UPLOAD_ERR_PARTIAL
                   $erreur = "L'envoi du fichier a été interrompu pendant le transfert !";
                   break;
                   case 4: // UPLOAD_ERR_NO_FILE
                   $erreur = "Le fichier que vous avez envoyé a une taille nulle !";
                   break;
          }
		} elseif(strtolower($extension) != 'png'){
			$erreur = $filename." n'est pas au format png mais au format ".$extension;
		} elseif ((isset($_FILES['image']['tmp_name']) && ($_FILES['image']['error'] == UPLOAD_ERR_OK))) {
			if(!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)){
				$erreur = "problème d'envoi du fichier";
			}else {

				$bdd = new PDO('mysql:host=mysql51-130.perso;dbname=slrchallbdd', $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				$bdd->query("SET NAMES 'utf8'");

				// Préparation des données
				$req = $bdd->prepare("INSERT INTO blog_welcome(Titre, Image, Article, date_article) VALUES(:titre, :image, :article, NOW())");
				$req->execute(array('titre' => $titre, 'image' => $_FILES['image']['name'], 'article' => $article));
				header("Location : ../index.php");
			}
		}

	}
?>

<! DOCTYPE html>
<html>
	<head>
		<meta charse="ISO-8859-1" />
		<title>SLr-Challenge | Redaction</title>
		<link rel="icon" type="image/png" href="images/icon.png" />
		<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
		<script src="//cdn.ckeditor.com/4.4.6/basic/ckeditor.js"></script>
	<body>
		<form id="redac" method="post" action="1464109cd095d311a8b196b3eb260f77ecfd47e1.php" enctype="multipart/form-data" >
			Titre : <br/> <input type="text" name="Titre" value="Mon titre d'article" /><br/><br/>
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
			Image (PNG, MAX:2Mo): <br/><input type="file" name="image"/><br/><br/>
			Article :<br/> <textarea name="contenue" > </textarea><br/<br/>
			<input type="submit" value="Envoyer" />
		</form>
		<div><p> <?php echo $erreur; ?> </p></div>
		<script>
            CKEDITOR.replace( 'contenue' );
        </script>
	</body>
</html>