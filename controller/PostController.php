<?php

function Home()
{
    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $firstpost = $postmanager->getFirstPost();

    require ('view/frontend/AccueilView.php');
}

function listPosts()
{
    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $posts = $postmanager->getPosts();

    require ('model/CommentManager.php');

    $commentmanager = new CommentManager();
    $commentnumber = $commentmanager->getCommentsNumber();

    require('view/frontend/ListPostView.php');
}

function articleCreation()
{
    require('view/backend/articleCreation.php');
}

function articleModification($PostId)
{
    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $post = $postmanager->getPost($PostId);

    require ('view/backend/articleModification.php');
}

function modifPost($PostId)
{
    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $post = $postmanager->updatePost($PostId);

    require ('view/backend/AccueilBackendView.php');
}

function inputPost()
{
    require('model/PostCreator.php');

    $creation = new PostCreator();
    $creation->createPost();

    require ('view/backend/AccueilBackendView.php');
}

function Login()
{
    require ('view/frontend/loginView.php');
}

function displayPost($PostId)
{
    require ('model/PostManager.php');
    require ('model/CommentManager.php');

    $postmanager = new PostManager();
    $post = $postmanager->getPost($PostId);
    $commentmanager = new CommentManager();
    $comment = $commentmanager->getCommentsForPost($PostId);

    require ('view/frontend/DisplayPostView.php');
}

function articleSuppression($PostId)
{
    require ('model/PostManager.php');
    require ('model/CommentManager.php');

    $postmanager = new PostManager();
    $deletepost = $postmanager->deletePost($PostId);
    $commentmanager = new CommentManager();
    $deletecomment = $commentmanager->CommentSuppressionByPost($PostId);

    require ('view/backend/AccueilBackendView.php');
}