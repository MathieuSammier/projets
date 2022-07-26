
<!DOCTYPE html>
<!--[IE 6 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[IE 9)|!(IE)]><!-->

<html lang="fr"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>SLr-Challenge - Se connecter</title>

		<!-- Pour Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!-- Informations -->
		<meta name="mots" content="challenge, slr, esport, sport, jeux vidéos, tournois, ligues, abonnements">
		<meta name="description" content="Site web eSport">
		<meta name="auteur" content="SLr">

		<!-- CSS -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>

	<body>
		
		<!-- Navbar -->
		
	<nav class="navbar navbar-default" style="
    background-color: #404852;
">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="
    height: 100%;
    padding-left: 25px;
    padding-right: 15px;
    margin-left: -14px;
"
onmouseover="this.style.backgroundColor='#404852';" onmouseout="this.style.backgroundColor='#b55d5d';">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="index.php">
        <img alt="SLr-Challenge" href="index.php" src="images/home.png" style="    height: 250%;
    padding-bottom: 10px;">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a href="index.php">Accueil</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tournois <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tournois-create.php">Créer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="tournois-join.php">Rejoindre</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matchs <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="matchs-create.php">Créer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="matchs-join.php">Rejoindre</a></li>
          </ul>
        </li>
		<li><a href="member.php">Membres</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signin.php">Se connecter</a></li>
        <li><a href="register.php">S'inscrire</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	
		<!-- Footer -->
			<footer>
			</footer>

		<!-- JS -->
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>