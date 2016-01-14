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
    <meta property="og:title" content="Sera que deu certo" />
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
    
    <section id="shipapping-heart">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Em que Cidade você deveria fazer intercâmbio?</h2>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-question fa-4x"></i>
                        </div>
                        <h3>Responda as Perguntas</h3>
                    </div>
                </div>
                <div class="col-md-6 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-globe fa-4x"></i>
                        </div>
                        <h3>Encontre sua Cidade</h3>
                    </div>
                </div>
                <div class="col-md-6 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-plane fa-4x"></i>
                        </div>
                        <h3>Viaje</h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

    <section id="goartha-question">
        <div class="container">
            <div class="section-header" id="question-header">
                <h2 class="section-title text-center wow fadeInDown">Faça o Login com Facebook para começar o teste<br>
                    <button id="loginBtn" class="btn btn-facebook"><i class="fa fa-facebook"> </i> Facebook Login</button>
                </h2>
            </div>        
        </div>
    </section><!--/#pricing-->
    <section id="portfolio">
        <div class="container">
           <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" onclick="show_amigos();" >Amigos</a></li>
                    <li><a id="tab_ficchar" href="#" onclick="show_ficchar();" >Personagens Fictícios</a></li>
                    <li><a href="#" data-filter=".corporate">Corporate</a></li>
                    <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
                </ul><!--/#portfolio-filter-->
            </div>
            <div id="amigos"></div>
            <div id="ficchar" hidden="hidden">
                <label>MUDA MUDA</label><br/>
                <input type="text"/>
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->
<!--
     <div id="response"></div><img id="profile" height="100px" width="100px" src="images/team/01.jpg" hidden="hidden" />
    
-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date("Y");?> NUMERUSOFT powered by <a target="_blank" href="http://numerusoft.com/" title="NumeruSoft">numeruoft.com</a>
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
//        var id;
//		document.getElementById('response').innerHTML = 'Hello ' + response.name + 'ID'+ response.id + 'Email' + response.email + 'niver' + response.birthday;
//        id= response.id;
//        console.log(response);
//        $("#profile").attr("src","http://graph.facebook.com/"+id+"/picture?type=normal");
	});
    getTaggable_Friends();
}

function getTaggable_Friends(){
    FB.api("/me/taggable_friends?limit=5000",{fields:'name,picture.width(300).height(300)'},function (tag_friends) {
        var gg="";
        var src="";
        var i;
        for(i=0;i<=tag_friends.data.length;i++){
            src=tag_friends.data[i].picture.data.url;
            gg="<div class='portfolio-item creative'><div class='portfolio-item-inner'><img onclick='generateimg(this.src)' id='friend"+i+"' class='img-responsive' src='"+tag_friends.data[i].picture.data.url+"' alt='' width='300px' height='300px' /><div class='portfolio-info'><h3>"+tag_friends.data[i].name+"</h3>"+tag_friends.data[i].id+"<a class='preview' rel='prettyPhoto'><i class='fa fa-heart'></i></a></div></div><!--/.portfolio-item-->";
            $("#amigos").append(gg);
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
    
$("#tab_amigos").click(function() {
    $("#ficchar").hide();
    $("#amigos").show();
    alert("abigos");
});
$("#tab_ficchar").click(function() {
    $("#amigos").hide();
    $("#ficchar").show();
    alert("fic");
});
function show_amigos(){
    $("#ficchar").hide();
    $("#amigos").show();
}
function show_ficchar(){
    $("#amigos").hide();
    $("#ficchar").show();
}    
</script>
</body>
</html>