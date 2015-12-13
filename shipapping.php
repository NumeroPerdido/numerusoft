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
    
     <div id="response"></div><img id="profile" height="100px" width="100px" src="images/team/01.jpg" hidden="hidden" />
    
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
<!--    <script src="js/main.js"></script>-->
    <script>
        var sharecity;
        var userid;
function getUserData() {
	FB.api('/me?fields=birthday,email,name', function(response) {
        var url="http://graph.facebook.com/"+response.id+"/picture?type=normal";
        userid=response.id;
        $.ajax({
            type: "POST",
            url: "saveprofile.php",
            data: {img: url, id:response.id},
            success: function(result){
                $("#profile").attr("src","profile/"+response.id+".jpg");
            }
        });
        $("#profile").show();
		document.getElementById('response').innerHTML = 'Nome: ' + response.name + '<br>ID: '+ response.id + ' <br>Link Facebook: <a href="http://www.facebook.com/'+response.id+'">'+ 'www.facebook.com/'+response.id+'</a>'+ '<br> Email: ' + response.email + '<br> Aniversário: ' + response.birthday;
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
            $('#question').show();
            $('#question-header').hide();
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
            $('#question').show();
            $('#question-header').hide();
			getUserData();
		}
	}, {scope: 'public_profile,email', return_scopes: true});
}, false);
 
document.getElementById('share').addEventListener('click', function() {
//    $('meta[property="og:title"]').attr('content', 'wabalabadubdub');
    $('meta[property="og:title"]').replaceWith('<meta property="og:title" content="New Title">');
    FB.ui({
        method: 'share_open_graph',
        action_type: 'og.likes',
        action_properties: JSON.stringify({
            object:'http://numerusoft.com/share.php?city='+sharecity,
        })
    }, 
    function(response){
      // Debug response (optional)
      console.log(response);
    });
    
}, false); 
</script>
    <script>
        var question={
            Q1: {title: "Qual lingua você gostaria de aprender?", resp1:{text:"Inglês", nextq:"Q2"}, resp2:{text:"Francês", nextq:"Q3"}, resp3:{text:"Espanhol", nextq:"Q4"} },
            Q2: {title: "Qual país você acha mais interessante?", resp1:{text:"Estados Unidos", nextq:"Q5"}, resp2:{text:"Canadá", nextq:"Q6"}, resp3:{text:"Austrália", nextq:"Q7"}, resp4:{text:"Inglaterra", nextq:"Q8"} },
            Q3: {title: "Qual país você acha mais interessante?", resp1:{text:"França", nextq:"Q9"}, resp2:{text:"Canadá", nextq:"Q10"}},
            Q4: {title: "Qual país você acha mais interessante?", resp1:{text:"Espanha", nextq:"Q11"}, resp2:{text:"Argentina", nextq:"Q12"}},
            Q5: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Nova York"}, resp2:{text:"Festas", result:"Los Angeles"}, resp3:{text:"Praia", result:"Miami"}, resp4:{text:"Pontos Históricos", result:"Boston"}},
            Q6: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Toronto"}, resp2:{text:"Festas", result:"Montreal"}, resp3:{text:"Parques", result:"Vancouver"}},
            Q7: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Sidney"}, resp2:{text:"Esportes Radicais", result:"Cairns"}, resp3:{text:"Praias", result:"Gold Coast"}},
            Q8: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Londres"}, resp2:{text:"Festas", result:"Liverpool"}, resp3:{text:"Pontos Históricos", result:"Manchester"}},
            Q9: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Paris"}, resp2:{text:"Praias", result:"Nice"}, resp3:{text:"Pontos Históricos", result:"Amboise"}},
            Q10: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Quebec"}, resp2:{text:"Festas", result:"Montreal"}},
            Q11: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Madrid"}, resp2:{text:"Pontos Históricos", result:"Barcelona"}},
            Q12: {title: "Qual das opções abaixo combina mais com você?", resp1:{text:"Cidade Grande", result:"Buenos Aires"}, resp2:{text:"Belezas Naturais", result:"Bariloche"}},
        };
        
        var cities={
            "Nova York":{image: "images/cities/Nova%20York.png", x:610, y:200},
            "Los Angeles":{image: "images/cities/Los%20Angeles.png", x:567, y:242},
            "Miami":{image: "images/cities/Miami.png", x:573, y:203},
            "Boston":{image: "images/cities/Boston.png", x:555, y:180},
            "Toronto":{image: "images/cities/Toronto.png", x:518, y:203},
            "Montreal":{image: "images/cities/Montreal.png", x:573, y:200},
            "Vancouver":{image: "images/cities/Vancouver.png", x:537, y:193},
            "Sidney":{image: "images/cities/Sidney.png", x:510, y:205},
            "Cairns":{image: "images/cities/Cairns.png", x:568, y:242},
            "Gold Coast":{image: "images/cities/Gold%20Coast.png", x:568, y:242},
            "Londres":{image: "images/cities/Londres.png", x:568, y:242},
            "Liverpool":{image: "images/cities/Liverpool.png", x:568, y:242},
            "Manchester":{image: "images/cities/Manchester.png", x:565, y:183},
            "Paris":{image: "images/cities/Paris.png", x:406, y:175},
            "Nice":{image: "images/cities/Nice.png", x:580, y:182},
            "Amboise":{image: "images/cities/Amboise.png", x:565, y:215},
            "Quebec":{image: "images/cities/Quebec.png", x:603, y:200},
            "Madrid":{image: "images/cities/Madrid.png", x:568, y:200},
            "Barcelona":{image: "images/cities/Barcelona.png", x:568, y:243},
            "Buenos Aires":{image: "images/cities/Buenos%20Aires.png", x:750, y:185},
            "Bariloche":{image: "images/cities/Bariloche.png", x:545, y:255},
        };
        
        
        function load_first_question(){
            $("#title").html(question["Q1"].title);
            if(question["Q1"].resp1){
                $("#resp1").html("<strong>"+question["Q1"].resp1.text+"</strong>");
                $("#resp1").attr("onclick", "load_nextquestion('"+question["Q1"].resp1.nextq+"');");
                $("#resp1").show();
            }
            else{
                $("#resp1").hide();
            }
            if(question["Q1"].resp2){
                $("#resp2").html("<strong>"+question["Q1"].resp2.text+"</strong>");
                $("#resp2").attr("onclick", "load_nextquestion('"+question["Q1"].resp2.nextq+"');");
                $("#resp2").show();
            }
            else{
                $("#resp2").hide();
            }
            if(question["Q1"].resp3){
                $("#resp3").html("<strong>"+question["Q1"].resp3.text+"</strong>");
                $("#resp3").attr("onclick", "load_nextquestion('"+question["Q1"].resp3.nextq+"');");
                $("#resp3").show();
            }
            else{
                $("#resp3").hide();
            }
            if(question["Q1"].resp4){
                $("#resp4").html("<strong>"+question["Q1"].resp4.text+"</strong>");
                $("#resp4").attr("onclick", "load_nextquestion('"+question["Q1"].resp4.nextq+"');");
                $("#resp4").show();
            }
            else{
                $("#resp4").hide();
            }
        }
        load_first_question();
        
        function load_nextquestion(nextq){
            $("#title").html(question[nextq].title);
            $("#resp1").html("<strong>"+question[nextq].resp1.text+"</strong>");
            if(question[nextq].resp1.nextq){
                $("#resp1").attr("onclick", "load_nextquestion('"+question[nextq].resp1.nextq+"');");
            }
            else{
                $("#resp1").attr("onclick", "get_city_result('"+question[nextq].resp1.result+"');");
            }
            $("#resp2").html("<strong>"+question[nextq].resp2.text+"</strong>");
            if(question[nextq].resp2.nextq){
                 $("#resp2").attr("onclick", "load_nextquestion('"+question[nextq].resp2.nextq+"');");
            }
            else{
                $("#resp2").attr("onclick", "get_city_result('"+question[nextq].resp2.result+"');");
            }
            if(question[nextq].resp3){
                $("#resp3").html("<strong>"+question[nextq].resp3.text+"</strong>");
                if(question[nextq].resp3.nextq){
                    $("#resp3").attr("onclick", "load_nextquestion('"+question[nextq].resp3.nextq+"');");
                }
                else{
                    $("#resp3").attr("onclick", "get_city_result('"+question[nextq].resp3.result+"');");
                }
                $("#resp3").show();
            }
            else{
                $("#resp3").hide();
            }
            if(question[nextq].resp4){
                $("#resp4").html("<strong>"+question[nextq].resp4.text+"</strong>");
                if(question[nextq].resp4.nextq){
                    $("#resp4").attr("onclick", "load_nextquestion('"+question[nextq].resp4.nextq+"');");
                }
                else{
                    $("#resp4").attr("onclick", "get_city_result('"+question[nextq].resp4.result+"');");
                }
                $("#resp4").show();
            }
            else{
                $("#resp4").hide();
            }
        }
        
        function get_city_result(city){
            sharecity=city.replace(" ","_");
            $("#question").hide();
            var bg= new Image();
            var img2= document.getElementById('profile');  
            var canvas = document.getElementById('canvas');
            var context = canvas.getContext('2d');
            canvas.width = 1336;
            canvas.height = 752;
            
            context.globalAlpha = 1.0;
            bg.onload = function() {
                context.drawImage(img2, cities[city].x, cities[city].y, 200, 200);
                context.drawImage(bg, 0, 0);
            };
            bg.src = cities[city].image;
            $("#loading").show();
            setTimeout(function(){
                $("#loading").hide();
                $("#canvas").show();
                document.getElementById("share").style.display = "block";
//                var canvasData = canvas.toDataURL("image/png");
//                $.ajax({
//                    url:'saveimg.php', 
//                    type:'POST',
//                    data:{
//                        imgurl:canvasData,
//                        city: city
//                    },
//                    success: function(response){
////                        $("#canvas").after("<img src='"+city+".png' width='600' height='600'/>");
//                        alert(response);
//                    }
//                });
            }, 7000);
                
        }
    </script>
</body>
</html>