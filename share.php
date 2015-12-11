<?php
   if(isset($_GET["city"])){
       $city=$_GET["city"];
       $city=str_replace("_"," ",$city);  
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
    
    <meta property="og:image" content="http://numerusoft.com/images/cities/original/<?php echo $_GET["city"];?>.png" />
    <meta property="og:title" content="<?php echo "Eu tirei $city | Qual cidade você deveria fazer intercâmbio?"; ?>" />
    <meta property="og:description" content="INSERIR DESCRIÇÃO SOBRE A CIDADE AQUI" />
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
                        <li class="scroll active"><a href="index.php#NumeruSoft">NumeruSoft</a></li>
                        <li class="scroll"><a href="index.php#Clubismo">Clubismo</a></li>
                        <li class="scroll"><a href="index.php#Shipapping">Shipapping</a></li>
                        <li class="scroll"><a href="index.php#animated-number">Números</a></li>
                        <li class="scroll"><a href="index.php#work-process">Procedimento</a></li>
                        <li class="scroll"><a href="index.php#meet-team">Equipe</a></li> 
                        <li class="scroll"><a href="index.php#get-in-touch">Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->


    <section id="portfolio">
        <div class="container">
            <a href="goartha.php" class="btn btn-primary btn-lg">Fazer o Teste</a>
            <img class="responsive-img" src="images/cities/original/<?php echo $_GET["city"];?>.png"/>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date("Y");?> NUMERUSOFT powered by <a target="_blank" href="http://numerusoft.com/" title="NumeruSoft">NumeruSoft.com</a>
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
</body>
</html>