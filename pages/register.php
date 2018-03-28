<?php

require '../models/user.php';

list ($alert, $name, $mail, $mail2) = register();

require '../views/register-view.php';