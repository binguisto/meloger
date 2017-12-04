<?php
include "config.php";


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Me Loger | Bienvenue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="home_one">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.11&appId=564890253676851';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <!-- start preloader -->
    <div id="loader-wrapper">
        <div class="logo"><a href="#"><span>Me </span>Loger</a></div>
        <div id="loader">
        </div>
    </div>
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area">
            <div class="header_top_area">
                    <div class="container">
                        <div class="row">
                            <div class="header_top clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="left_header_top">
                                        <ul>
                                            <li><a href="#"><img src="img/temp-icon.png" alt="temp-icon">Conakry, 23°C</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 floatright">
                                    <div class="right_header_top clearfix floatright">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="">
                                                <a class="border-right-dark-4" href="user/login.php">Connexion</a></li>
                                            <li role="presentation" >
                                                <a id="drop1" href="inscription"  aria-haspopup="true"  aria-expanded="false">
                                                  Inscription                                                 
                                                </a>                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- start main header -->
        <div class="main_header_area">
            <div class="container">
                <!-- start mainmenu & logo -->
                <div class="mainmenu">
                    <div id="nav">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header header-logo">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                <div class="site_logo fix">
                                    <a id="brand" class="clearfix navbar-brand" href="accueil"><img width="140" height="40" src="img/logo_meloger.jpg" alt="Trips"></a>
                                    <!-- <div class="header_login floatleft">
                                        <ul>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Register</a></li>
                                        </ul>
                                    </div>  -->
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li role="presentation" class="">
                                        <a   href="accueil"  aria-expanded="false">
                                          Accueil
                                        </a>
                                    </li>
                                    <li><a href="">A propos</a></li>

                                    <li role="presentation" class="dropdown">
                                        <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                          Immobiliers
                                        </a>
                                        <ul id="menu2" class="dropdown-menu" role="menu">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="articles.php?parcelle">Parcelles</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="articles.php?chambre">Chambres</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="articles.php?divers">Divers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Galerie</a></li>
                                    <li><a href="">News</a></li>
                                    <li><a href="contact">Contacts</a></li>
                                </ul>
                                <div class="emergency_number">
                                    <a href="tel:+224654332233"><img src="img/call-icon.png" alt="">+224 654332233</a>
                                </div>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
                <!-- end mainmenu and logo -->
            </div>
        </div>
        <!-- end main header -->

    </header>
    <!-- end header -->