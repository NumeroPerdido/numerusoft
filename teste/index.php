<?php
require_once __DIR__ . '/facebook-sdk-v5/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1035145306499331',
  'app_secret' => 'dfe7b0a142976bbebe4c055eec483980',
  'default_graph_version' => 'v2.2',
  ]);
session_start();
$params = array(
  'scope' => 'publish_actions'
);
$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://numerusoft.com/teste/login.php',$params);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>
 <!DOCTYPE html>
<html>
<head>
<title>Teste facebook</title>
</head>
<body>
   
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