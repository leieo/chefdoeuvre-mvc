<?php

require __DIR__.'/../models/user.php';

list ($alert, $loginmail) = login();

require __DIR__.'/../views/login-view.php';