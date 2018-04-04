<?php
session_start();

require __DIR__.'/../models/user.php';
require __DIR__.'/../models/project.php';

function getInfos() {
	$user_id = $_SESSION['id'];
	$title = htmlspecialchars($_POST['title']);
	return array ($user_id, $title);
}

if (isset($_POST['newproject'])) {
	list ($user_id, $title) = getInfos();
	createProject($user_id, $title);
}

require __DIR__.'/../views/newproject-view.php';