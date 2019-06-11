<?php

function listComments()
{
    require ('model/CommentManager.php');

    $commentmanager = new CommentManager();
    $comments = $commentmanager->getComments();

    require ('view/frontend/ListCommentView.php');
}

function commentCreation()
{
    require ('view/frontend/commentCreation.php');
}

function inputComment()
{
    require ('model/CommentCreator.php');

    $creation = new CommentCreator();
    $creation->createComment();
}
