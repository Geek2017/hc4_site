<?php

require_once 'Facebook/autoload.php';
require_once 'Facebook/facebook.php';
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Exceptions\FacebookResponseException;


    $fb = new Facebook\Facebook([
        'app_id' => '2408326212738466',
        'app_secret' => '9aace75e2438b9c512e5dc14e2cdb1dc',
        'default_graph_version' => 'v4.0'
    ]);
    
    $helper = $fb->getRedirectLoginHelper();

    if (!session_id()) {
        session_start();
    }

?>