<?php

require_once ('Connection.php');

class Login
{
    public function getLogs()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->prepare('SELECT * FROM user WHERE pseudo = ?');
            $req->execute(array($_POST['user']));
            $logs = $req->fetch();
            error_log($_POST['user']);
            return $logs;

        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }

    public function Verify()
    {

    }
}
