<?php

function listComments()
{
    require('model/CommentManager.php');

    $commentmanager = new CommentManager();
    $comments = $commentmanager->getComments();

    require('view/frontend/ListCommentView.php');
}

function inputComment($PostId)
{
    require('model/CommentCreator.php');

    $creation = new CommentCreator();
    $creation->createComment($PostId);

    if (isset($_SESSION['login'])) {
        if (session_id() === $_SESSION['login'])
            AccueilBackEnd();
    } else {
        Home();
    }
}

function commentSuppression($CommentId)
{
    require ('model/CommentManager.php');

    $commentmanager = new CommentManager();
    $commentsuppression = $commentmanager->CommentSuppression($CommentId);

    require ('view/backend/AccueilBackendView.php');
}

function signalComment($CommentId)
{
    require ('model/CommentManager.php');

    $commentmanager = new CommentManager();
    $signalcomment = $commentmanager->signalComment($CommentId);

    Home();
}
