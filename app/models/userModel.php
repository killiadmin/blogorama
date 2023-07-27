<?php

class User extends Model
{
    /**
     * Construction method for the users table
     */
    public function __construct()
    {
        $this->table = 'users';
        $this->getConnection();
    }

    /**
     * Method to check if an email already exists in the db
     * @param $mail
     * @return mixed
     */
    public function isEmailTaken ($mail)
    {
        $stmt = 'SELECT mail FROM users WHERE mail = ?';
        return $this->execArray($stmt, array($mail));
    }

    /**
     * Method to create a user in the db
     * @param $name
     * @param $username
     * @param $quote
     * @param $mail
     * @param $password
     * @return mixed
     */

    public function createUser($name, $username, $quote, $mail, $password)
    {
        $stmt = 'INSERT INTO users (name, username, quote, mail, password, dateCreate) VALUES (?, ?, ?, ?, ?, ?)';
        $date = date("Y-m-d H:i:s");

        $dataRegister = [ $name, $username, $quote, $mail, $password, $date];
        return $this->execArray($stmt, $dataRegister);
    }

    public function testConnection()
    {
        try {
            $this->getConnection();
            echo "Connexion � la base de donn�es r�ussie !";
        } catch (PDOException $exception) {
            echo "Erreur de connexion � la base de donn�es : " . $exception->getMessage();
        }
    }
}

