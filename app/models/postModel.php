<?php

class Post extends Model {
    public function __construct()
    {
        $this->table = 'posts';
        $this->getConnection();
    }
}