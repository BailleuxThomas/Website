<?php

session_start();


$dbhost = 'localhost';
$dbname = 'vcuk7627_tombook';
$dbuser = 'root';
$dbpswd = 'root';
try {
    $db = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpswd,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOexception $e) {
    die("Une erreur est survenue lors de la connexion à la base de donnée.");
}
