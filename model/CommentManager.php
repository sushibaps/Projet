<?php
require_once ('Connection.php');

class CommentManager
{
    public function getComments()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->query('SELECT * FROM comments');
            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }

    }

    public function getCommentsForPost($postId)
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->prepare('SELECT * FROM comments WHERE id_post = ?');
            $req->execute(array($postId));
            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }

    }

    public function getCommentsNumber()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->query('SELECT id_comment FROM comments DESC LIMIT 0, 1');

            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }
}

