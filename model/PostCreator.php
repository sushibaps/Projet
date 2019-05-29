<?php
require_once ('model/Manager.php');

class PostCreator extends Manager
{
    public function createPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, `date`) VALUES (:title, :content, `:date`)');
        $req->execute(array(
            'title' => htmlspecialchars($_POST['title']),
            'content' => htmlspecialchars($_POST['article'])
        ));
        echo "Je crois qu'on a bien écrit dans la base de données";
    }
}
