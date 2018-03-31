<?php
session_start();

require __DIR__.'/../models/user.php';
require __DIR__.'/../models/project.php';

Project::create();

require __DIR__.'/../views/newproject-view.php';