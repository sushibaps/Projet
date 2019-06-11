<?php
require_once('Connection.php');

class PostManager
{
    public function getFirstPost()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->query('SELECT * FROM posts ORDER BY id DESC LIMIT 0, 1');
            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }

    }

    public function getPosts()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->query('SELECT * FROM posts');

            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }

    }

    public function getPost($postId)
    {
        $db = Connection::getConnection()->db();
        $req = $db->prepare('SELECT title, content, `date` FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();


        return $post;
    }
}
