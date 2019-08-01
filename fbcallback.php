<?php
    require_once "vendor/facebook/graph-sdk/src/config.php";

//    $accessToken = $helper->getAccessToken();

    // try{
    //     $accessToken = $helper->getAccessToken();
    // } 
    // catch(\Facbook\Exceptions\FacebookResponseException $e){
    //     echo "Response Exception: " . $e.getMessage();
    //     var_dump($helper->getError());
    //     exit();
    // }catch(\Facbook\Exceptions\FacebookSDKException $e){
    //     echo "SDK Exception: " . $e->getMessage();
    //     exit();
    // }
    
    
    // if(!$accessToken){
	// 	header('Location: fb.com');
	// 	exit();
    // }

	// $oAuth2Client = $FB->getOAuth2Client();
	// if(!$accessToken->isLongLived())
    // 	$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
    
    try {
        $accessToken = $helper->getAccessToken();
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        var_dump($helper->getError());
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
       echo 'Facebook SDK returned an error: ' . $e->getMessage();
       exit;
      }

	$response = $fb->get("me?fields=id,name,email");
	$userData = $response->GraphNode()->asArray();
	echo '<pre>';
	var_dump($userData);


?>