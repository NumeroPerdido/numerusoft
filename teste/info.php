<?php
    session_start();
    echo "I'm a digital cyber demon<br/>";
    require_once __DIR__ . '/facebook-sdk-v5/src/Facebook/autoload.php';
    $fb = new Facebook\Facebook([
        'app_id' => '1035145306499331',
        'app_secret' => 'dfe7b0a142976bbebe4c055eec483980',
        'default_graph_version' => 'v2.2',
    ]);
  
    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->get('/me?fields=id,name', $_SESSION['facebook_access_token']);
    } 
    catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } 
    catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    $user = $response->getGraphUser();
    echo "Name: " . $user["name"] . "<br/>";
    echo "<img src='//graph.facebook.com/".$user["id"]."/picture?type=large'><br/>";
    $linkData = [
      'link' => 'http://www.exemple.com',
      'message' => 'Olá Mundo teste com mensagem',
    ];

    try {
      // Returns a `Facebook\FacebookResponse` object
//      echo "< a href="$fb->post('/me/feed', $linkData, $_SESSION['facebook_access_token'])"";
//      $response = $fb->post('/me/feed', $linkData, $_SESSION['facebook_access_token']);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

//    $graphNode = $response->getGraphNode();

    echo 'Posted with id: ' . $graphNode['id'];
?>
<a href="<?php echo "ola mundo"; ?>">Cliqu auqi</a>