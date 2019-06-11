<?php

class Connection
{
    private $_db = NULL;
    static private $instance = NULL;

    private function __construct()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'password');
    }

    public function db()
    {
        return $this->_db;
    }

    static public function getConnection()
    {
        if (self::$instance === NULL)
            self::$instance = new Connection();

        return self::$instance;
    }
}
