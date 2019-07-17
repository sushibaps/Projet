<?php
require_once('model/PostManager.php');
require_once('model/PostCreator.php');
require_once('model/CommentManager.php');

class PostController
{

    public function Home()
    {
        $postmanager = new PostManager();
        $firstpost = $postmanager->getFirstPost();

        require('view/frontend/AccueilView.php');
    }


    public function listPosts()
    {
        $postmanager = new PostManager();
        $posts = $postmanager->getPosts();

        $commentmanager = new CommentManager();
        $commentnumber = $commentmanager->getCommentsNumber();

        require('view/frontend/ListPostView.php');
    }

    public function articleCreation()
    {
        require('view/backend/articleCreation.php');
    }

    public function articleModification($PostId)
    {
        $postmanager = new PostManager();
        $post = $postmanager->getPost($PostId);

        require('view/backend/articleModification.php');
    }

    public function modifPost($PostId)
    {
        $postmanager = new PostManager();
        $post = $postmanager->updatePost($PostId);

        require('view/backend/AccueilBackendView.php');
    }

    public function inputPost()
    {
        $creation = new PostCreator();
        $creation->createPost();

        require('view/backend/AccueilBackendView.php');
    }

    public function Login()
    {
        require('view/frontend/loginView.php');
    }

    public function displayPost($PostId)
    {
        $postmanager = new PostManager();
        $post = $postmanager->getPost($PostId);

        $commentmanager = new CommentManager();
        $comment = $commentmanager->getCommentsForPost($PostId);

        require('view/frontend/DisplayPostView.php');
    }

    public function articleSuppression($PostId)
    {
        $postmanager = new PostManager();
        $deletepost = $postmanager->deletePost($PostId);

        $commentmanager = new CommentManager();
        $deletecomment = $commentmanager->CommentSuppressionByPost($PostId);

        require('view/backend/AccueilBackendView.php');
    }
}