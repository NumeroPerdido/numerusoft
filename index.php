<?php
    $page="Original";
    if(isset($_GET["page"])){
        $page=$_GET["page"];
        $img="images/slider/clubismo.jpg";
    }
    else{
        $img="images/slider/ship.jpg";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>NumeruSoft</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
    <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
    <link rel="manifest" href="images/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <meta property="og:image" content="http://numerusoft.com/<?php echo $img;?>" />
    <meta property="og:title" content="Esse é o meu título" />
    <meta property="og:description" content="Isso é minha descricao" />
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img src="images/logo.png" alt="logo" class="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#NumeruSoft">NumeruSoft</a></li>
                        <li class="scroll"><a href="#Clubismo">Clubismo</a></li>
                        <li class="scroll"><a href="#Shipapping">Shipapping</a></li>
                        <li class="scroll"><a href="#animated-number">Números</a></li>
                        <li class="scroll"><a href="#work-process">Procedimento</a></li>
                        <li class="scroll"><a href="#meet-team">Equipe</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/software.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Numeru</span>Soft</h2>
                                    <p>NaN, not a number, is a numeric data type value representing an undefined or unrepresentable value.</p>
                                    <button id="loginBtn" class="btn btn-primary btn-lg">Facebook Login</button>
                                    <button id="share" class="btn btn-primary btn-lg">Share</button>
                                    <fb:login-button scope="public_profile,email" >
</fb:login-button>
<div id="response"></div><img id="profile" height="100px" width="100px" src="images/team/01.jpg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/clubismo.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>C</span>lubismo</h2>
                                    <p>Construa seu time, personalize seus jogadores e enfrente times rivais no campo de batalha futebolístico. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Clique aqui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(images/slider/ship.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>Ship</span>apping</h2>
                                    <p>Dê uma de cupido e ship seus amigos um com os outros ou até mesmo com personagens fictícios.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Clique aqui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    <section id="portfolio">
        <div class="container">
            
            <img id="bg" hidden="hidden" src="images/slider/love.png"/>
            <img id="img2" hidden="hidden" src="images/portfolio/03.jpg"/>
            <canvas id="canvas" ></canvas>
           
            <div id="abigos">
                
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Alguns Números</h2>
                <p class="text-center wow fadeInDown">Alguns números e fatos interessantes sobre a NumeruSoft</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="9001" data-duration="1000"></div>
                        <strong>USUÁRIOS CADASTRADOS</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="1234" data-duration="1000"></div>
                        <strong>COMPARTILHAMENTOS</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="1" data-duration="1000"></div>
                        <strong>NÚMEROS PERDIDOS</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="0" data-duration="1000"></div>
                        <strong>PROJETOS COMPLETADOS</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

<!--    NumeruSoft Screen-->
    <section id="NumeruSoft">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">NumeruSoft</h2>
                <p class="text-center wow fadeInDown">NaN, not a number, is a numeric data type value representing an undefined or unrepresentable value</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/screen1.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Placeholder</h4>
                            <p>Placeholder</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Placeholder</h4>
                            <p>Placeholder</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Placeholder</h4>
                            <p>Placeholder</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Placeholder</h4>
                            <p>Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Clubismo Screen-->
    <section id="Clubismo">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Clubismo</h2>
                <p class="text-center wow fadeInDown">Construa seu time, personalize seus jogadores e enfrente times rivais no campo de batalha futebolístico</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/screen2.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Clubismo</h4>
                            <p>Crie seu Time</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Clubismo</h4>
                            <p>Personalize seus jogadores</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Clubismo</h4>
                            <p>Jogue online para consagrar seu time</p>
                        </div>
                    </div>

<!--
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Clubismo</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
-->
                </div>
            </div>
        </div>
    </section> 
    <!--    Shipapping Screen-->
    <section id="Shipapping">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Shipapping</h2>
                <p class="text-center wow fadeInDown">Dê uma de cupido e ship seus amigos um com os outros ou até mesmo com personagens fictícios.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/screen3.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Shipapping</h4>
                            <p>Dê uma de Cupido e ship seus amigos</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-ship"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Shipapping</h4>
                            <p>Ship seus amigos com outros amigos</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Shipapping</h4>
                            <p>Ship seus amigos com Personagens Fictícios</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-ship"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Shipapping</h4>
                            <p>Ship Personagens Fictícios com Personagens Fictícios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nosso Procedimento</h2>
                <p class="text-center wow fadeInDown">Placeholder</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>REUNIÃO</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>PLANEJAMENTO</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x"></i>
                        </div>
                        <h3>DESIGN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h3>DESENVOLVIMENTO</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3>TESTE</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x"></i>
                        </div>
                        <h3>LANÇAR</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

    <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Conheça a Equipe</h2>
                <p class="text-center wow fadeInDown">Equipe de desenvolvedores NumeruSoft</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/perfil.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Pablo Freitas Lopes</h3>
                            <span>Programador</span>
                        </div>
                        <p>Programador Web back-end com experiência em PHP, JavaScript, Android e FacebookApi</p>
                        <ul class="social-icons">
                            <li><a href="https://gist.github.com/NumeroPerdido"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/default.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Undefined</h3>
                            <span>????????????</span>
                        </div>
                        <p>NaN, not a number, is a numeric data type value representing an undefined or unrepresentable value.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/default.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Undefined</h3>
                            <span>????????????</span>
                        </div>
                        <p>NaN, not a number, is a numeric data type value representing an undefined or unrepresentable value.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/default.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Undefined</h3>
                            <span>????????????</span>
                        </div>
                        <p>NaN, not a number, is a numeric data type value representing an undefined or unrepresentable value.</p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="row">
                <div class="col-sm">
                    <h3 class="column-title">Nossas Habilidades</h3>
                    <strong>PHP</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                      <strong>HTML</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                    </div>
                    <strong>JavaScript</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                    <strong>PhoneGap</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="40">40%</div>
                    </div>
                    <strong>jQuery</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                    </div>
                     <strong>CSS</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="75">85%</div>
                    </div>
                    <strong>MySQL</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Android</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="45">45%</div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#meet-team-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/GabeN2.jpg" alt=""></p>
                                <h4>Gabe Newell</h4>
                                <small>Co-fundador Valve</small>
                                <p>The easiest way to stop piracy is not by putting antipiracy technology to work. It's by giving those people a service that's better than what they're receiving from the pirates.</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/GabeN1.jpg" alt=""></p>
                                <h4>Gabe Newell</h4>
                                <small>Co-fundador Valve</small>
                                <p>I'm a handsome man with a charming personality.</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Entre em Contato</h2>
<!--                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="-19.9221445" data-longitude="-43.9499925"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Informações para Contato</h3>

                            <address>
                              <strong>NumeruSoft</strong><br>
                              Rua dos Bobos Nº 0<br>
                              Alameda dos Anjos, Belo Horizonte, MG<br>
                              Tel: (031) 0800-0800-0800
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nome" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Mensagem" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date("Y");?> NUMERUSOFT powered by <a target="_blank" href="http://numerusoft.com/" title="NumeruSoft">numerusoft.com</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
function getUserData() {
	FB.api('/me?fields=birthday,email,name', function(response) {
        var id;
		document.getElementById('response').innerHTML = 'Hello ' + response.name + 'ID'+ response.id + 'Email' + response.email + 'niver' + response.birthday;
        id= response.id;
        console.log(response);
        $("#profile").attr("src","http://graph.facebook.com/"+id+"/picture?type=normal");
	});
    getTaggable_Friends();
}

function getTaggable_Friends(){
    FB.api("/me/taggable_friends?limit=5000",{fields:'name,picture.width(300).height(300)'},function (tag_friends) {
        var gg="";
        var src="";
        var i;
        for(i=0;i<=tag_friends.data.length;i++){
//            $("#abigos").append("<br/><br/><img src='"+tag_friends.data[i].picture.data.url+"'/>");
//            $("#abigos").append(tag_friends.data[i].name);
            src=tag_friends.data[i].picture.data.url;
            gg="<div class='portfolio-items'><div class='portfolio-item creative'><div class='portfolio-item-inner'><img onclick='generateimg(this.src)' id='friend"+i+"' class='img-responsive' src='"+tag_friends.data[i].picture.data.url+"' alt='' width='300px' height='300px' /><div class='portfolio-info'><h3>"+tag_friends.data[i].name+"</h3>"+tag_friends.data[i].id+"<a class='preview' rel='prettyPhoto'><i class='fa fa-heart'></i></a></div></div></div><!--/.portfolio-item--></div>";
            $("#abigos").append(gg);
        }
    });
}
 
window.fbAsyncInit = function() {
	//SDK loaded, initialize it
	FB.init({
		appId      : '1035145306499331',
		xfbml      : true,
		version    : 'v2.4'
	});
	//check user session and refresh it
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			//user is authorized
			document.getElementById('loginBtn').style.display = 'none';
//            window.location.replace("index.php?page='zawarudo'");
			getUserData();
		} else {
			//user is not authorized
		}
	});
};
 
//load the JavaScript SDK
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/pt_BR/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
//add event listener to login button
document.getElementById('loginBtn').addEventListener('click', function() {
	//do the login
	FB.login(function(response) {
		if (response.authResponse) {
			//user just authorized your app
			document.getElementById('loginBtn').style.display = 'none';
			getUserData();
		}
	}, {scope: 'public_profile,email', return_scopes: true});
}, false);
 
document.getElementById('share').addEventListener('click', function() {        
    FB.ui({
        method: 'share_open_graph',
        action_type: 'og.likes',
        action_properties: JSON.stringify({
            object:'http://numerusoft.com/',
        })
    }, 
    function(response){
      // Debug response (optional)
      console.log(response);
    });
    
}, false);
        
function generateimg(picture){
    var teste;
        var img1 = document.getElementById('bg');
//var img3 = document.getElementById('friend2');
    var img2= new Image(800, 800);   
    img2.src=picture;

var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
canvas.width = img1.width;
canvas.height = img1.height;

context.globalAlpha = 1.0;

context.drawImage(img1, 0, 0);
    context.drawImage(img2, 600, 600, 300, 300);
//context.globalAlpha = 1.0; //Remove if pngs have alpha


}        
</script>
</body>
</html>