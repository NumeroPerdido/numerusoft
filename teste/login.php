<?php
require_once __DIR__ . '/facebook-sdk-v5/src/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1035145306499331',
  'app_secret' => 'dfe7b0a142976bbebe4c055eec483980',
  'default_graph_version' => 'v2.2',
  ]);
  
  session_start();

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  header("Location: info.php");
}

?>