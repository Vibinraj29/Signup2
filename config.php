<?php

    session_start();
	require_once "GoogleApi/vendor/autoload.php";
	$gClient = new Google_Client();
    $gClient->setClientId("752773427907-9mvsdk1gg1h6hnjgg3rkhutdub2uge4k.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setRedirectUri("http://localhost/Registration/GoogleApi/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>