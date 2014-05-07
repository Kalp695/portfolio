<?php

$mysqli = @new Mysqli("cl1-sql12", "gmika2", "UKK4EyGE6LC", "gmika2");

header('Content-Type: text/html; charset=utf-8');
$mysqli->set_charset('utf8');

if ($mysqli->connect_error) {
    die("Un probmème est survenu lors de la tentative de connexion à la BDD : " . $mysqli->connect_error);
}

