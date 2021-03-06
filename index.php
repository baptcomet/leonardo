<?php
/*
 * TODO
 * - Un carroussel
 * - Un backoffice
 * - Des données en base
 *      actualités
 *      photos
 *      cours et horaires
 *      articles de presse
 *      professeurs
 *  - Un planning des cours interactif
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JacaDanse</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">JacaDanse</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#accueil">Accueil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cours">Cours</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#planning">Planning</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#evenements">Évènements</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Photos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#presse">Presse</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">A propos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">L'équipe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading">Bienvenue à l'école JacaDanse</div>
                <div class="intro-lead-in">Nous sommes ravis de vous voir</div>
                <a href="#accueil" class="page-scroll btn btn-xl">Visiter</a>
            </div>
        </div>
    </header>

    <!-- ACCUEIL -->
    <section id="accueil">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Accueil</h2>
                    <h3 class="section-subheading text-muted">Nos cours de danses latines</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="service-heading">Salsa, bachata</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Draguignan</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Samba, Tango</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Flayosc</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Danses latines</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ste Anastasie</h4>
                    <p class="text-muted">Gard (30)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COURS -->
    <section id="cours" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cours</h2>
                    <h3 class="section-subheading text-muted">Nos cours de danses latines</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="service-heading">Salsa, bachata</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Draguignan</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Samba, Tango</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Flayosc</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Danses latines</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ste Anastasie</h4>
                    <p class="text-muted">Gard (30)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PLANNING -->
    <section id="planning">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Planning</h2>
                    <h3 class="section-subheading text-muted">Nos cours de danses latines</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="service-heading">Salsa, bachata</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Draguignan</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Samba, Tango</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Flayosc</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Danses latines</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ste Anastasie</h4>
                    <p class="text-muted">Gard (30)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENEMENTS -->
    <section id="evenements" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Évènements</h2>
                    <h3 class="section-subheading text-muted">Nos cours de danses latines</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="service-heading">Salsa, bachata</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Draguignan</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Samba, Tango</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Flayosc</h4>
                    <p class="text-muted">Var (83)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
                <div class="col-md-4">
                    <h3 class="service-heading">Danses latines</h3>
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ste Anastasie</h4>
                    <p class="text-muted">Gard (30)</p>
                    <h5 class="service-heading"><i class="fa fa-clock-o"></i> Horaires</h5>
                    <p class="text-muted">Lundi au Vendredi : 9h - 18h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PHOTOS -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Photos</h2>
                    <h3 class="section-subheading text-muted">Prises lors de nos cours de danse (enfin, presque...)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Justine et Alexis</h4>
                        <p class="text-muted">Vos idoles</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Reynaud / Leonardo</h4>
                        <p class="text-muted">Le couple de l'année!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Une autre photo</h4>
                        <p class="text-muted">Juste pour dire</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>La danse</h4>
                        <p class="text-muted">C'est bien</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>La danse sportive</h4>
                        <p class="text-muted">C'est mieux !</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Et avec nous...</h4>
                        <p class="text-muted">Allelujah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRESSE -->
    <section id="presse" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Presse</h2>
                    <h3 class="section-subheading text-muted">L'histoire de l'école</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012-2013</h4>
                                    <h4 class="subheading">Nos débuts</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ca c'est quand on s'est dit "Et pourquoi pas nous!"</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mars 2014</h4>
                                    <h4 class="subheading">L'école est crée</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">On donne nos premiers cours à nos amis etc.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Janvier 2015</h4>
                                    <h4 class="subheading">Achat du local à St Maximin</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">L'école déménage et on a une grande salle!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mai 2015</h4>
                                    <h4 class="subheading">L'explosion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">On a un site internet tellement cool que ça marche trop bien</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Aujourd'hui,
                                    <br>c'est à vous
                                    <br>de danser!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- A PROPOS -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">A Propos</h2>
                    <h3 class="section-subheading text-muted">L'histoire de l'école</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2012-2013</h4>
                                    <h4 class="subheading">Nos débuts</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ca c'est quand on s'est dit "Et pourquoi pas nous!"</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mars 2014</h4>
                                    <h4 class="subheading">L'école est crée</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">On donne nos premiers cours à nos amis etc.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Janvier 2015</h4>
                                    <h4 class="subheading">Achat du local à St Maximin</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">L'école déménage et on a une grande salle!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Mai 2015</h4>
                                    <h4 class="subheading">L'explosion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">On a un site internet tellement cool que ça marche trop bien</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Aujourd'hui,
                                    <br>c'est à vous
                                    <br>de danser!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- L'EQUIPE -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Notre équipe géniale</h2>
                    <h3 class="section-subheading text-muted">Faites connaissance avec vos professeurs</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Justine Reynaud</h4>
                        <p class="text-muted">Fondatrice - Professeur</p>
                        <p class="text-muted">Salsa, Samba, Tango</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Alexis Leonardo</h4>
                        <p class="text-muted">Professeur</p>
                        <p class="text-muted">Rumba, Rock, Bachata</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Nous serons toujours la pour vous !</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactez Nous</h2>
                    <h3 class="section-subheading text-muted">Laissez nous un message et nous vous répondrons dès que possible</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre nom *" id="name" required data-validation-required-message="Veuillez saisir votre nom">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Votre email *" id="email" required data-validation-required-message="Veuillez saisir votre email">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Votre numéro de téléphone *" id="phone" required data-validation-required-message="Veuillez saisir votre numéro de téléphone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" required data-validation-required-message="Veuilelz saisir un message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Ecole Jacadanse</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">jacadanse@google.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- PHOTOS MODALS -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Justine et Alexis</h2>
                            <p class="item-intro text-muted">Vos idoles, j'en suis sur!</p>
                            <img class="img-responsive img-centered" src="img/portfolio/1-big.jpg" alt="">
                            <p>
                                Alors <strong>faites pas genre</strong> je le sais c'est cramé.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Reynaud / Leonardo</h2>
                            <p class="item-intro text-muted">Le couple de l'année</p>
                            <img class="img-responsive img-centered" src="img/portfolio/2-big.jpg" alt="">
                            <p>2011, 2012, 2013, 2014, 2015</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Une autre photo</h2>
                            <p class="item-intro text-muted">Juste pour dire</p>
                            <img class="img-responsive img-centered" src="img/portfolio/3-big.jpg" alt="">
                            <p>Ou juste montrer, plutôt</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>La danse</h2>
                            <p class="item-intro text-muted">C'est bien</p>
                            <img class="img-responsive img-centered" src="img/portfolio/4-big.jpg" alt="">
                            <p>Oui oui</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>La danse sportive</h2>
                            <p class="item-intro text-muted">C'est mieux !</p>
                            <img class="img-responsive img-centered" src="img/portfolio/5-big.jpg" alt="">
                            <p>Eh oui eh oui</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Et avec nous</h2>
                            <p class="item-intro text-muted">Allelujah</p>
                            <img class="img-responsive img-centered" src="img/portfolio/6-big.jpg" alt="">
                            <p>Dieu bénisse l'Amérique. Et la France.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
