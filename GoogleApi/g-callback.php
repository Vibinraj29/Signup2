<?php
	require_once "../config.php";
	include('../connection.php');

	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: ../login.php');
		exit();
	}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

	if(isset($_SESSION['email'])){
		

		$sql = "INSERT INTO users (tokenid, name, email) VALUES ('{$_SESSION['id']}', '{$_SESSION['givenName']} {$_SESSION['familyName']}', '{$_SESSION['email']}')";
		$result = mysqli_query($conn,$sql);
	}
	header('Location: ../index.php');
	exit();
?>