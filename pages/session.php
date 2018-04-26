<?php
session_start();

require __DIR__.'/../models/user.php';
require __DIR__.'/../models/project.php';


// je vérifie que l'utilisateur est bien connecté pour accéder à la page session.php
// si il est bien passé par la page login, la variable $_SESSION['id'] est définie
// si sa valeur est nulle > redirection vers une page d'erreur

$userid = intval($_SESSION['id']);
if ($userid == 0) {
	header("Location: error.php"); 
}

// récupération des infos user pour les réutiliser dans la vue
$userinfo = User::session($userid);


/*
if (!isset($_SESSION['id']) OR $userinfo['id'] != $_SESSION['id']) {
	header("Location: error.php"); 
}
*/


/* ... A MODIFIER ...
// je stocke dans la variable userProject le résultat renvoyé par la fonction browse() de la classe Project
// ( dans le model project.php )
// avec l'id de l'utilisateur en "argument"??? (paramètre?)
$userProjects = Project::browse($userid);
var_dump($userProjects);
... A MODIFIER ... */

require __DIR__.'/../views/session-view.php';