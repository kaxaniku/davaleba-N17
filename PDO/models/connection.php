<?php
include 'News.php';
include 'Categories.php';
class DB{    
    public $serverName = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'blog';
    public $connection;

    function __construct() {
        $this->connection = new PDO("mysql:host=".$this->serverName.";dbname=".$this->dbname, 
                    $this->username, $this->password);
    }


    function gA($sql){
        $stm = $this->connection->query($sql);
        return $stm->fetchAll();
    }


    function gF($sql){
        $stm = $this->connection->query($sql);
        return $stm->fetch();
    }
}

$DataBase = new DB;

