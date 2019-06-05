<?php

class Manager
{
    protected function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'password');
            return $db;
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
