<?php

class Users
{
    public function index()
    {
        $this->User = new User();
        return $this->User->getAll();
    }
}