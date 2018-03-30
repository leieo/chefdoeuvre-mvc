<?php
session_start();


require __DIR__.'/../models/user.php';

list ($alert, $name, $mail, $mail2) = register();

require __DIR__.'/../views/register-view.php';