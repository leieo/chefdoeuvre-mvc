<?php

require '../models/user.php';

list ($alert, $loginmail) = login();

require '../views/login-view.php';