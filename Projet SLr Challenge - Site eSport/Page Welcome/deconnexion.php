<?php
	//demarage de la session
	session_start();

	//mise en cache des variables sessions
	$_SESSION = array();

	//destruction de la session
	session_destroy();

	//redirection
	header("Location: index.php");
?>
