<?php
require_once('Connection.php');

class CommentCreator
{
    public function createComment()
    {
        $db = Connection::getConnection()->db();
        $req = $db->prepare('INSERT INTO comments(content, author, `date`) VALUES (:content, :author, NOW())');
        $req->execute(array(
            'content' => htmlspecialchars($_POST['comment']),
            'author' => htmlspecialchars($_POST['author'])
        ));
    }
}

