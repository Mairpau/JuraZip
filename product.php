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
<link rel="stylesheet" type="text/css" href="./css/product.css">

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


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="accueil"><a href="index.php">Accueil</a></li>
        <li class="panier"><a href="panier.php">Panier</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>

<?php
  $id = $_GET['id'];


  $GLOBALS['list'] = [];

  function addToCard() {
    $list.add(this.$id);
    alert($list);

    exit;
  };

  $text1 = "Grande pochette parfaite pour stocker une multitude d'objets.";
  $text2 = "Trousse basique.";
  $text3 = "Housse pas mal";
  $text4 = "Petit porte-carte permettant de garder avec vous vos diverses cartes aussi qu'un peu de monnaie.";
?>

<!-- Product Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/<?php
          echo $id;
        ?>.png" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>
            <?php
              if ($id === 'pochette') {
                echo "Pochette";
              } elseif ($id === 'trousse') {
                echo "Trousse";
              } elseif ($id === 'housse') {
                echo "Housse";
              } elseif ($id === 'carte') {
              echo "Porte cartes";
            }
            ?>
          </h2>


          <h3>Description</h3>
          <p>
            <?php
              if ($id === 'pochette') {
                echo $text1;
              } elseif ($id === 'trousse') {
                echo $text2;
              } elseif ($id === 'housse') {
                echo $text3;
              } elseif ($id === 'carte') {
                echo $text4;
              }
            ?>
          </p>

          <h3>Taille</h3>
          <p>
            <?php
              if ($id === 'pochette') {
                echo "18";
              } elseif ($id === 'trousse') {
                echo "16";
              } elseif ($id === 'housse') {
                echo "8";
              } elseif ($id === 'carte') {
                echo "6";
            }
            ?>
             cm
          </p>

          <h3>Prix</h3>
          <p>
            CHF
            <?php
              if ($id === 'pochette') {
                echo "19";
              } elseif ($id === 'trousse') {
                echo "16";
              } elseif ($id === 'housse') {
                echo "10";
              } elseif ($id === 'carte') {
                echo "8";
            }
            ?>
            .-
          </p>

          <h3>Couleurs</h3>
          <p>
            <ol>
              <li><canvas id="can" width="30" height="30"/></li>
            </ol>
          </p>

          <a onclick="$this.addToCard();" class="btn btn-custom btn-lg">Ajouter au panier</a>


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
