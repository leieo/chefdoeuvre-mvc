<?php
session_start();

require __DIR__.'/../models/user.php';

if (isset($_POST['loginform'])) {

	$loginmail = htmlspecialchars($_POST['loginmail'] ?? '');
	$loginpassword = sha1($_POST['loginpassword'] ?? '');

	if (empty($_POST['loginmail']) OR empty($_POST['loginpassword'])) 
	{
		$alert = "... merci de remplir tous les champs ...";
		/*$loginmail = $_POST['loginmail'];*/
	} else {

		list ($alert, $userinfo) = login($loginmail, $loginpassword);

		if (!isset($alert)) {
		$_SESSION['id'] = $userinfo['id']; 
		header("Location: session.php?id=".$_SESSION['id']);
		}
	}

}

require __DIR__.'/../views/login-view.php';