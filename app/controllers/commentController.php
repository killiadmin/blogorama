<?php

class Comments
{
    public function index()
    {
        $this->Comment = new Comment();
        return $this->Comment->getAll();
    }
}