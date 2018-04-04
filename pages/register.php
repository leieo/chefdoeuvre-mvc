<?php
session_start();


require __DIR__.'/../models/user.php';

function getUserInfos() {
	$name = htmlspecialchars($_POST['name'] ?? '');
	$mail = htmlspecialchars($_POST['mail'] ?? '');
	$mail2 = htmlspecialchars($_POST['mail2'] ?? '');
	$password = sha1($_POST['password'] ?? '');
	$password2 = sha1($_POST['password2'] ?? '');
	return array ($name, $mail, $mail2, $password, $password2);
}

if (isset($_POST['registerform'])) {

	if (
		empty($_POST['name']) OR
		empty($_POST['mail']) OR
		empty($_POST['mail2']) OR
		empty($_POST['password']) OR
		empty($_POST['password2'])
	) {

		$alert = "All fields are required ...";
		list ($name, $mail, $mail2, $password, $password2) = getUserInfos();

	} else {

		list ($name, $mail, $mail2, $password, $password2) = getUserInfos();
		list ($alert, $name, $mail, $mail2) = User::register($name, $mail, $mail2, $password, $password2);

	}
}

require __DIR__.'/../views/register-view.php';