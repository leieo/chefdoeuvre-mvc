<?php
session_start();

require __DIR__.'/../models/user.php';

$userinfo = session();

require __DIR__.'/../views/session-view.php';