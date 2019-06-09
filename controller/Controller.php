<?php

function listPosts()
{
    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $posts = $postmanager->getPosts();

    require ('view/frontend/ListView.php');
}

function articleCreation()
{
    require('view/backend/articleCreation.php');
}

function articleInput()
{
    require('model/PostCreator.php');

    $creation = new PostCreator();
    $creation->createPost();
}

function login()
{
    require ('view/frontend/loginView.php');
}