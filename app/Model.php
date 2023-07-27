<?php

/**
 * General model with containing information from the db as well as some selection methods
 */
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

    /**
     * Method to connect to the database in PDO
     * @return void
     */

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

    /**
     * Method to select all data in a table
     * @return mixed
     */
    public function getAll()
    {
        $sql = "SELECT DISTINCT * FROM " . $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Method allowing to select a particular data by specifying its id
     * @return mixed
     */
    public function getOne()
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE id=" . $this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     *  Method for executing a query by providing it with an array of data
     * @param $stmt
     * @param $array
     * @return mixed
     */
    public function execArray($stmt, $array = [])
    {
        $req = $this->_connexion->prepare($stmt);
        $req->execute($array);
        return $req->fetch();
    }
}
