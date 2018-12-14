<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jura'Zip</title>
<meta name="description" content="">
<meta name="author" content="mairpau">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"></a><img src="img/logo.svg" alt="..." class="logo"></div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Accueil</a></li>
        <li><a href="#about" class="page-scroll">Présentation de l'entreprise</a></li>
        <li><a href="#catalogue" class="page-scroll">Catalogue</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="panier.php" class="">Panier</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Jura'Zip<span></span></h1>
            <p>Bienvenue sur le site Jura'Zip.</p>
            <a href="#catalogue" class="btn btn-custom btn-lg page-scroll">Nos produits</a></div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/work.jpeg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Notre entreprise.</h2>
          <p>Nous sommes une entreprise fondée en Suisse, plus précisément au Jura.</p>
          <h3>Nos points forts</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Fabrication à la main</li>
                <li>Entreprise motivée</li>
                <li>Divers formats</li>
                <li>Variété de couleurs</li>
                <li>Originalité</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Catalogue Section -->
<div id="catalogue" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>Nos Produits</h2>
      <p>Toutes les trousses sont fabriquées localement à la main.</p>
    </div>
    <div id="row">

      <a href="product.php?id=pochette">
        <div class="col-md-3 col-sm-6 catalogue">
          <div class="thumbnail"> <img src="img/pochette.png" alt="..." class="catalogue-img">
            <div class="caption">
              <h4>Pochette</h4>
              <p>CHF 19.-</p>
            </div>
          </div>
        </div>
      </a>

      <a href="product.php?id=trousse">
        <div class="col-md-3 col-sm-6 catalogue">
          <div class="thumbnail"> <img src="img/trousse.png" alt="..." class="catalogue-img">
            <div class="caption">
              <h4>Trousse</h4>
              <p>CHF 16.-</p>
            </div>
          </div>
        </div>
      </a>

      <a href="product.php?id=housse">
        <div class="col-md-3 col-sm-6 catalogue">
          <div class="thumbnail"> <img src="img/housse.png" alt="..." class="catalogue-img">
            <div class="caption">
              <h4>Housse</h4>
              <p>CHF 10.-</p>
            </div>
          </div>
        </div>
      </a>

      <a href="product.php?id=carte">
        <div class="col-md-3 col-sm-6 catalogue">
          <div class="thumbnail"> <img src="img/carte.png" alt="..." class="catalogue-img">
            <div class="caption">
              <h4>Porte-Cartes</h4>
              <p>CHF 8.-</p>
            </div>
          </div>
        </div>
      </a>

    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Nous contacter</h2>
          <p>Vous pouvez nous laisser un message à l'aide du formulaire suivant :</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Nom" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Envoyer</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3>Informations</h3>
        <p><span><i class="fa fa-map-marker"></i> Adresse</span>2900<br>
          Porrentruy, Suisse</p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-phone"></i> Téléphone</span> 012 123 12 12</p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-envelope-o"></i> Email</span> info@jurazip.ch</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/Jura-Zip-724897844552960/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/jurazip/"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; Tout droits réservés <a href="http://www.jurazip.ch" rel="nofollow">Jura'Zip</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/nivo-lightbox.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
