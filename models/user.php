<?php

class User {

	function register($name, $mail, $mail2, $password, $password2) {

		require __DIR__.'/../database.php';

		$namelength = strlen($name);
		if ($namelength > 255) {	
			$alert = "... le nom est trop long ...";
			return array ($alert, $name, $mail, $mail2);
		}

		$namequery = $database->prepare('SELECT * FROM user WHERE name = :name');
		$namequery->execute(array('name' => $name));
		$nameexists = $namequery->rowCount();
		if ($nameexists != 0) {
			$alert = "... name already exists";
			return array ($alert, $name, $mail, $mail2);
		}

		$maillength = strlen($mail);
		if ($maillength > 255) {
			$alert = "... le mail est trop long ...";
			return array ($alert, $name, $mail, $mail2);
		}

		if (filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
			$alert = "... merci d'indiquer une adresse mail  valide ...";
			return array ($alert, $name, $mail, $mail2);
		}

		$mailquery = $database->prepare('SELECT * FROM user WHERE email = :email');
		$mailquery->execute(array('email' => $mail));
		$mailexists = $mailquery->rowCount();
		if ($mailexists != 0) {
			$alert = "... mail already exists ...";
			return array ($alert, $name, $mail, $mail2);
		}

		if ($mail != $mail2) {
			$alert = "... les adresses mail doivent être identiques ...";
			return array ($alert, $name, $mail, $mail2);
		}

		if ($password != $password2) {
			$alert = "... les mots de passe doivent être identiques ...";
			return array ($alert, $name, $mail, $mail2);
		}

		$insertuser = $database->prepare("INSERT INTO user(name, email, password) VALUES (:name, :email, :password)");
		$insertuser->execute(array(
			'name' => $name,
			'email' => $mail,
			'password' => $password
		));
		//
		$alert = "Welcome ! <br/><br/> You can log in <a href=\"./login.php\">here</a>";
		// OU
		// header('Location : index.php');
		// $_SESSION['registered'] = "... compte créé ..."
		return array ($alert, $name, $mail, $mail2);
	}

	function login($loginmail, $loginpassword) {

		require __DIR__.'/../database.php';

		$loginmail = htmlspecialchars($_POST['loginmail']);
		$loginpassword = sha1($_POST['loginpassword']);

		if (filter_var($loginmail, FILTER_VALIDATE_EMAIL) == false) 
		{
			$alert = "... merci d'indiquer une adresse mail valide ...";
			return array ($alert, NULL);
		}

		$userquery = $database->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
		$userquery->execute(array($loginmail, $loginpassword));
		$userexists = $userquery->rowCount();
		if ($userexists == 0) 
		{
			$alert = "... le mail et le mot de passe ne correspondent pas ...";
			return array ($alert, NULL);
		} else {
		$userinfo = $userquery->fetch();
		return array (NULL, $userinfo);
		}
	}
}


function session() {

	require __DIR__.'/../database.php';

	if (isset($_GET['id']) AND $_GET['id'] > 0) {
		$getid = intval($_GET['id']);
		$userquery = $database->prepare('SELECT * FROM user WHERE id = ?');
		$userquery->execute(array($getid));
		$userinfo = $userquery->fetch();
		return $userinfo;
	} else { 
		/*
		header("Location: error.php"); */
		echo 'test';
	}
}

/*
function unlockSession() {

	require '../database.php';

	if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
		return 'true';
	} else { 
		header("Location: error.php");
	}
}
*/

function logout() {
	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location: login.php");
}

