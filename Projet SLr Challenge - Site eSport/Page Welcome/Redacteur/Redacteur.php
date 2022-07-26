<?php
	if(isset($_POST['password'])){
		$password = sha1($_POST['password']);
		header("Location : ".$password.".php");
	}
?>

<! DOCTYPE html>
<html>
	<head>
		<meta charse="ISO-8859-1" />
		<title>SLr-Challenge | Redaction</title>
		<link rel="icon" type="image/png" href="images/icon.png" />
		<link rel="stylesheet" type="text/css" href="../CSS/AdminPage.css">
	</head>
	<body>
		<div id="securite"><p>PAGE SECURISE</p></div>
		<form id="lien" action="Redacteur.php" method="post">
			<input type="password" name="password"/>
		</form>
		</script>
	</body>
</html>