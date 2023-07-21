<?php

class Posts
{
    public function index()
    {
        $this->Post = new Post();
        return $this->Post->getAll();
    }
}