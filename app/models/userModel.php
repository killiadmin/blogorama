<?php

class User extends Model
{
    public function __construct()
    {
        $this->table = 'users';
        $this->getConnection();
    }

    public function isEmailTaken ($mail)
    {
        $stmt = 'SELECT mail FROM users WHERE mail = ?';
        return $this->execArray($stmt, array($mail));
    }

    public function createUser($name, $username, $quote, $mail, $password)
    {
        $stmt = 'INSERT INTO users (name, username, quote, mail, password) VALUES (?, ?, ?, ?, ?, ?)';
        $date = date("Y-m-d H:i:s");

        $dataRegister = [ $name, $username, $quote, $mail, $password, $date];
        return $this->execArray($stmt, $dataRegister);
    }
}

