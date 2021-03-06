<?php
require_once ('Connection.php');

class CommentManager
{
    public function getComments()
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->query('SELECT * FROM comments ORDER BY id_comment DESC');
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
            $req = $db->prepare('SELECT * FROM comments WHERE id_post = ? ORDER BY signalements DESC');
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
            $req = $db->query('SELECT id_comment FROM comments ORDER BY id_comment DESC LIMIT 0, 1');

            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }

    public function CommentSuppression($CommentId)
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->prepare('DELETE FROM comments WHERE id_comment = ?');
            $req->execute(array($CommentId));

            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }

    public function CommentSuppressionByPost($PostId)
    {
        try
        {
            $db = Connection::getConnection()->db();
            $req = $db->prepare('DELETE FROM comments WHERE id_post = ?');
            $req->execute(array($PostId));

            return $req;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }

    public function signalComment($CommentId)
    {
        $db = Connection::getConnection()->db();
        $reqq = $db->prepare('SELECT signalements FROM comments WHERE id_comment = ?');
        $reqq->execute(array($CommentId));
        $data = $reqq->fetch();
        error_log(json_encode($data));
        $req = $db->prepare('UPDATE comments SET signalements = :signalements WHERE id_comment = :id_comment');
        $req->execute(array(
            'signalements' => $data['signalements'] + 1,
            'id_comment' => $CommentId));
        return $req;
    }

    public function createComment($PostId)
    {
        $db = Connection::getConnection()->db();
        $req = $db->prepare('INSERT INTO comments(content, author, id_post, `date`) VALUES (:content, :author, :id_post, NOW())');
        $req->execute(array(
            'content' => htmlspecialchars($_POST['comment']),
            'author' => htmlspecialchars($_POST['author']),
            'id_post' => $PostId
        ));
    }
}

