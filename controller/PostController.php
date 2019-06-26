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

function inputPost()
{
    require('model/PostCreator.php');

    $creation = new PostCreator();
    $creation->createPost();
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