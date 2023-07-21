<?php

abstract class Model
{
    private $host = '127.0.0.1';
    private $db_name = 'u746425507_blogorama';
    private $user = 'root';
    private $pass = 'azerty';
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    protected $_connexion;

    public $table;
    public $id;

    public function getConnection()
    {
        $this->_connexion = null;

        try {
            $this->_connexion = new PDO('mysql:host=' . $this->host . ';port=8889;dbname=' . $this->db_name, $this->user, $this->pass, $this->options);
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $exception) {
            echo 'Erreur: ' . $exception->getMessage();
        }
    }

    public function getAll()
    {
        $sql = "SELECT DISTINCT * FROM " . $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOne()
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id=" . $this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
}
