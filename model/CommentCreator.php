<?php
require_once('Connection.php');

class CommentCreator
{
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

