<?php
session_start();

require __DIR__.'/../models/user.php';

$userid = intval($_GET['id']);
if ($userid == 0) {
	header("Location: error.php"); 
}
$userinfo = User::session($userid);

if (!isset($_SESSION['id']) OR $userinfo['id'] != $_SESSION['id']) {
	header("Location: error.php"); 
}

require __DIR__.'/../views/session-view.php';