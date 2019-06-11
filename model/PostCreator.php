<?php
require_once('Connection.php');

class PostCreator
{
    public function createPost()
    {
        $db = Connection::getConnection()->db();
        $req = $db->prepare('INSERT INTO posts(title, content, `date`) VALUES (:title, :content, NOW())');
        $req->execute(array(
            'title' => htmlspecialchars($_POST['title']),
            'content' => htmlspecialchars($_POST['article'])
        ));
    }
}
