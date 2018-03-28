<?php

require '../config.php';

// connexion à la base de donnée et message d'erreur :
try {
    $database = new PDO($dataSourceName, $user, $password);
} catch (Exception $e) {
    die('Error : '.$e->getMessage());
}