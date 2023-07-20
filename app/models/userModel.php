<?php

class User extends Model {
    public function __construct() {
        $this->table = 'users';
        $this->getConnection();
    }

    public function testConnection()
    {
        try {
            $this->getConnection();
            echo "Connexion à la base de données réussie !";
        } catch (PDOException $exception) {
            echo "Erreur de connexion à la base de données : " . $exception->getMessage();
        }
    }
}