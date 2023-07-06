<?php

// Méthode permettant de se connecter à la base de données
$host = '127.0.0.1';
$db = 'u746425507_blogorama';
$user = 'root';
$pass = 'azerty';
$port = '8889';
$source = "mysql:host=$host;dbname=$db;port=$port";

try {
    $pdo = new PDO($source, $user, $pass);
    echo 'Connection établie !';
} catch (PDOException $e) {
    throw new PDOException ($e->getMessage(), $e->getCode());
}