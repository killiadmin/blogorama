<?php

class User extends Model
{
    public function __construct()
    {
        $this->table = 'users';
        $this->getConnection();
    }

    public function createUser($name, $username, $quote, $mail, $password)
    {
        $stmt = 'INSERT INTO users (name, username, quote, mail, password) VALUES (?, ?, ?, ?, ?)';
        /*$date = date("Y-m-d H:i:s");*/

        $dataRegister = [ $name, $username, $quote, $mail, $password];
        return $this->execArray($stmt, $dataRegister);
    }
}

