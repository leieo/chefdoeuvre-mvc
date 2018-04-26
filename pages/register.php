<?php
// la fonction session_start démarre la session php
session_start();


require __DIR__.'/../models/user.php';

// DÉCLARATION de la fonction getUserInfos()

// récupère les données du formulaire, via la VARIABLE SUPERGLOBALE $_POST, 
function getUserInfos() {
// stocke chacune des données dans une variable, 
	// htmlspecialchars convertit les caractères spéciaux en entité HTML (certains ont une signification spéciale en HTML)
	$name = htmlspecialchars($_POST['name'] ?? '');
	// $toto = $_POST['name'] ?? '' équivaut à
	// $toto = isset($_POST['name']) ? $_POST['name'] : '' équivaut
	/* if(isset($_POST['name'])) {
		$toto = $_POST['name'];
	} else {
		$toto = '';
	} */
	$mail = htmlspecialchars($_POST['mail'] ?? '');
	$mail2 = htmlspecialchars($_POST['mail2'] ?? '');
	// sha 1 est une fonction de hachage cryptographique
	$password = sha1($_POST['password'] ?? '');
	$password2 = sha1($_POST['password2'] ?? '');
// retourne les données dans un tableau.
	return array ($name, $mail, $mail2, $password, $password2);
}

// à l'envoi du formulaire ...
// 'registerform' correspond à la valeur de l'attribut "name" de la balise input de type "submit"
if (isset($_POST['registerform'])) {

	// list () permet de rassembler les variables sous forme de tableau, pour les assigner en une seule ligne
	list ($name, $mail, $mail2, $password, $password2) = getUserInfos();
	// APPEL de la fonction getUserInfos(),
	// qui récupère les données déjà entrée par l'utilisateur 
	// (elles seront réinjectées dans la vue)


	// ... si l'un des champs est vide ...
	if (
		empty($_POST['name']) OR
		empty($_POST['mail']) OR
		empty($_POST['mail2']) OR
		empty($_POST['password']) OR
		empty($_POST['password2'])
	) {

		// ... définition de $alert (... voir register-view.php l.70)
		$alert = "All fields are required ...";

	} else {

		//list ($name, $mail, $mail2, $password, $password2) = getUserInfos();
		list ($alert, $name, $mail, $mail2) = User::register($name, $mail, $mail2, $password, $password2);
		// APPEL de la fonction register(),
		// avec en ARGUMENT des variables dans lesquelles seront stockées les infos du formulaires
		// récupérées via la VARIABLE SUPERGLOBALE $_POST
	}
}

require __DIR__.'/../views/register-view.php';