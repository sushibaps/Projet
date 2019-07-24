<?php
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

class PostController
{
    public function __construct()
    {
        $this->postmanager = new PostManager();
        $this->commentmanager = new CommentManager();
    }

    public function Home()
    {
        $firstpost = $this->postmanager->getFirstPost();

        require('view/frontend/AccueilView.php');
    }


    public function listPosts()
    {
        $posts = $this->postmanager->getPosts();

        $commentnumber = $this->commentmanager->getCommentsNumber();

        require('view/frontend/ListPostView.php');
    }

    public function articleCreation()
    {
        if (isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            require('view/backend/articleCreation.php');
        } else {
            $error = "unloggeduser";
            require('view/frontend/ErrorView.php');
        }
    }

    public function articleModification($PostId)
    {
        if (isset($PostId) AND is_numeric($PostId) AND isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            $post = $this->postmanager->getPost($PostId);

            require('view/backend/articleModification.php');
        } else {
            $error = "articlemodification";
            require('view/frontend/ErrorView.php');
        }
    }

    public function modifPost($PostId)
    {
        if (isset($PostId) AND is_numeric($PostId) AND isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            $post = $this->postmanager->updatePost($PostId);

            require('view/backend/AccueilBackendView.php');
        } else {
            $error = "modifpost";
            require('view/frontend/ErrorView.php');
        }
    }

    public function inputPost()
    {
        if (isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            if ($_POST['title'] != "" AND $_POST['article'] != ""){
                $this->postmanager->createPost();

                require('view/backend/AccueilBackendView.php');
            } else {
                $error = "Veuillez compléter les champs";
                require('view/backend/articleCreation.php');
            }

        } else {
            $error = "unloggeduser";
            require('view/frontend/ErrorView.php');
        }
    }

    public function Login()
    {
        require('view/frontend/loginView.php');
    }

    public function displayPost($PostId)
    {
        if (isset($PostId) AND is_numeric($PostId)) {
            $post = $this->postmanager->getPost($PostId);

            $comment = $this->commentmanager->getCommentsForPost($PostId);

            require('view/frontend/DisplayPostView.php');
        } else {
            $error = "displaypost";
            require('view/frontend/ErrorView.php');
        }
    }

    public function articleSuppression($PostId)
    {
        if (isset($PostId) AND is_numeric($PostId) AND isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            $deletepost = $this->postmanager->deletePost($PostId);

            $deletecomment = $this->commentmanager->CommentSuppressionByPost($PostId);

            require('view/backend/AccueilBackendView.php');
        } else {
            $error = "articlesuppression";
            require('view/frontend/ErrorView.php');
        }

    }
}