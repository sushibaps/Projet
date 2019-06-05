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
    require('view/frontend/articleCreation.php');
}

function articleInput()
{
    require('model/PostCreator.php');

    $creation = new PostCreator();
    $creation->createPost();
}