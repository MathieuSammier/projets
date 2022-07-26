
<!DOCTYPE html>
<!--[IE 6 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[IE 9)|!(IE)]><!-->

<html lang="fr"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>SLr-Challenge - Prototype</title>

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
		<link rel="stylesheet" type="text/css" href="style.css">
		

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
		<li class="active"><a href="index.php"><b>Accueil </b><span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Tournois </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tournois-create.php">Créer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="tournois-join.php">Rejoindre</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Matchs </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="matchs-create.php">Créer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="matchs-join">Rejoindre</a></li>
          </ul>
        </li>
		<li><a href="member.php"><b>Membres</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signin.php">Se connecter</a></li>
        <li><a href="register.php">S'inscrire</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	 
	<!-- New --> 
	
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/1.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">L'équipe SLr Gagne le tout premier tournois !</h4>
        <p>Après un échec lors du tournois "machinchose", l'équipe SLr gagne le tournois composé...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/2.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">Mise à jour du réglement</h4>
        <p>Bla bla blablbalablab blablabla blablbal bababababa blablabna poubalalababa baobolala ...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/3.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">Liste des matchs de la semaine !</h4>
        <p>Bla bla blablbalablab blablabla blablbal bababababa blablabna poubalalababa baobolala ...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/4.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">Attentions aux runes !</h4>
        <p>Bla bla blablbalablab blablabla blablbal bababababa blablabna poubalalababa baobolala ...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/1.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">Le classement est suspendu !</h4>
        <p>Bla bla blablbalablab blablabla blablbal bababababa blablabna poubalalababa baobolala ...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/articles/2.png" alt="...">
      <div class="caption">
        <h4 style="color: #b55d5d;">Bientot 25 équipes sur le site !</h4>
        <p>Bla bla blablbalablab blablabla blablbal bababababa blablabna poubalalababa baobolala ...</p>
        <div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Lire la suite...</button></div>
      </div>
    </div>
  </div>
</div>
		
	<!-- Promotion -->

			<div class="promote">
		<img src="images/promo.png" alt="Promotion" style="margin-left: 15px; margin-top: 10px;">
	</div>
	
	<!-- Calendrier / Top Match / Top Tournois -->
	
	<div class="topcalend">
    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Horaire</th>
                        <th>Evenement</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Un seul évenement -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">19</div>
                            <div class="dayofweek">Mardi</div>
                            <div class="shortdate text-muted">Juillet, 2016</div>
                        </td>
                        <td class="agenda-time">
                            17h30
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                <i class="glyphicon glyphicon-tower" title="Tournois"></i> 
                                Lancement du premier Tournois SLr-Challenge
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Plusieurs évenements -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">24</div>
                            <div class="dayofweek">Dimanche</div>
                            <div class="shortdate text-muted">Juillet, 2016</div>
                        </td>
                        <td class="agenda-time">
                            De 8h à 9h30
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
							    <i class="glyphicon glyphicon-facetime-video" title="Live"></i> 
                                Live ; Remise des prix
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            De 13h30 à 15h45 
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
							    <i class="glyphicon glyphicon-list-alt" title="Match Libre"></i>
                                Matchs libres pour gagner 850 points
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                            De 17h à 18h
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
							    <i class="glyphicon glyphicon-piggy-bank" title="Match Cashprize"></i>
                                CSGO - Cashprize ; SLr vs MachinBidule
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
			<img src="images/topmatch.png" alt="topmatch" style="margin-left: 15px; margin-top: 10px;">
			<img src="images/toptournois.png" alt="topmatch" style="margin-left: 15px; margin-top: 30px;">
			<img src="images/topplayer.png" alt="topmatch" style="margin-left: 15px; margin-top: 10px;">
</div>

    <!-- Partenaires -->
	
	<div class="partner">
	<h3 style="text-align: center;">Nos partenaires</h3>
	<hr class="style14">
<div class="col-xs-12">
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                        <li class="col-sm-3" style="width: 33%;">
    						<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Votre Site / Entreprise</h4>
									<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3" style="width: 33%;">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
								<h4>Votre Site / Entreprise</h4>
								<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3" style="width: 33%;">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Votre Site / Entreprise</h4>
									<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide1 --> 
            <div class="item">
                    <ul class="thumbnails">
                        <li class="col-sm-3" style="width: 33%;">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Votre Site / Entreprise</h4>
									<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3" style="width: 33%;">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Votre Site / Entreprise</h4>
									<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                        <li class="col-sm-3" style="width: 33%;">
							<div class="fff">
								<div class="thumbnail">
									<a href="#"><img src="images/partenaires/logo1.png" alt=""></a>
								</div>
								<div class="caption">
									<h4>Votre Site / Entreprise</h4>
									<p>Contactez-nous pour apparaître ici</p>
								</div>
                            </div>
                        </li>
                    </ul>
              </div><!-- /Slide2 --> 
        </div>
        
       
	   <nav>
			<ul class="control-box pager">
				<li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
				<li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
			</ul>
		</nav>
	   <!-- /.control-box -->   
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.col-xs-12 -->
</div>

		<!-- Footer -->
			<footer>
			</footer>

		<!-- JS -->
		
		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>