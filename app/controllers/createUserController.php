<?php

require_once '../app/models/database.php';

class UserController {
private $db;

public function __construct() {
$this->db = new Database('127.0.0.1', 'root', 'azerty', 'u746425507_blogorama');
}

public function createUser($name, $username,$picture,$quote, $mail, $password, $status, $activated, $dateCreate) {
$this->db->connect();
    $query = "INSERT INTO users (name, username, quote, mail, password) VALUES (:name, :username, :quote, :mail, :password)";
    $params = [
        ':name' => $name,
        ':username' => $username,
        ':quote' => $quote,
        ':mail' => $mail,
        ':password' => $password
    ];
$result = $this->db->executeQuery($query, $params);
$this->db->disconnect();
return $result;
}

/*public function getUser($userId) {
$this->db->connect();
$query = "SELECT * FROM users WHERE id = :id";
$params = [
':id' => $userId
];
$result = $this->db->executeQuery($query, $params);
$this->db->disconnect();
return $result;
}*/
}