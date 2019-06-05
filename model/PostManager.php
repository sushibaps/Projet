<?php
require_once ('Manager.php');

class PostManager extends Manager
{
    public function getPosts()
    {
        try
        {
            $db = $this->dbConnect();
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
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT title, content, `date` FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();


        return $post;
    }
}
