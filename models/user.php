<?php

function register() {

	require '../database.php';

	if (isset($_POST['registerform'])) {
		$name = htmlspecialchars($_POST['name']);
		$mail = htmlspecialchars($_POST['mail']);
		$mail2 = htmlspecialchars($_POST['mail2']);
		$password = sha1($_POST['password']);
		$password2 = sha1($_POST['password2']);

		if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['password']) AND !empty($_POST['password2'])) {

			$namelength = strlen($name);
			if ($namelength <= 255) {

				$namequery = $database->prepare('SELECT * FROM user WHERE name = :name');
				$namequery->execute(array('name' => $name));
				$nameexists = $namequery->rowCount();
				if ($nameexists == 0) {

					$maillength = strlen($mail);
					if ($maillength <= 255) {

						if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

							$mailquery = $database->prepare('SELECT * FROM user WHERE email = :email');
							$mailquery->execute(array('email' => $mail));
							$mailexists = $mailquery->rowCount();
							if ($mailexists == 0) {

								if ($mail == $mail2) {

									if ($password == $password2) {
										$insertuser = $database->prepare("INSERT INTO user(name, email, password) VALUES (:name, :email, :password)");
										$insertuser->execute(array(
											'name' => $name,
											'email' => $mail,
											'password' => $password
										));
										//
										$alert = "Welcome ! <br/><br/> You can log in <a href=\"./login.php\">here</a>";
										return $alert;

										// OU
										// header('Location : index.php');
										// $_SESSION['registered'] = "... compte créé ..."

									} else {
										$alert = "... les mots de passe doivent être identiques ...";
										return $alert;

									}
								} else {
									$alert = "... les adresses mail doivent être identiques ...";
									return $alert;
								}
							} else {
								$alert = "... mail already exists ...";
								return $alert;
							}
						} else {
							$alert = "... merci d'indiquer une adresse mail  valide ...";
							return $alert;
						}
					} else {
						$alert = "... le mail est trop long ...";
						return $alert;
					}
				} else {
					$alert = "... name already exists";
					return $alert;
				}
			} else {
				$alert = "... le nom est trop long ...";
				return $alert;
			}
		} else {
			$alert = "All fields are required ...";
			return $alert;
		}
	}
}

