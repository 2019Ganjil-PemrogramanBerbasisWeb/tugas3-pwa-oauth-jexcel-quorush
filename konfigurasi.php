<?php

	session_start();
	require_once"googleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("432246138068-8c2jcng2l1risgcmqh0sm8i22i95un05.apps.googleusercontent.com");
	$gClient->setClientSecret("bVCgtKIRmpMlQpD0QtGFNiPS");
	$gClient->setApplicationName("Tuladha");
	$gClient->setRedirectUri("http://localhost/Oauth/feedback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.me https://www.googleapis.com/auth/plus.login"); 

?>