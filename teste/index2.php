<?php
require_once __DIR__ . '/facebook-sdk-v5/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1035145306499331',
  'app_secret' => 'dfe7b0a142976bbebe4c055eec483980',
  'default_graph_version' => 'v2.2',
  ]);
session_start();
$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://localhost/teste/login-callback.php');

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>
 <!DOCTYPE html>
<html>
<head>
<title>Teste facebook</title>
</head>
<body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1035145306499331',
          xfbml      : true,
          version    : 'v2.4'
        });

        function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});
      };
        
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
<h1 id="fb-welcome"></h1>
<p>I'm a digital cyber demon</p>

</body>
</html> 