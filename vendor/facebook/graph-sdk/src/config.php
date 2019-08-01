<?php

require_once 'Facebook/autoload.php';


    $FB = new \Facebook\Facebook([
        'app_id' => '2408326212738466',
        'app_secret' => '9aace75e2438b9c512e5dc14e2cdb1dc',
        'default_graph_version' => 'v4.0'
    ]);
    
    $helper = $FB->getRedirectLoginHelper();

?>