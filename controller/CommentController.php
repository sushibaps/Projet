<?php
require_once('model/CommentManager.php');
require_once('model/CommentCreator.php');

class CommentController
{

    public function listComments()
    {
        $commentmanager = new CommentManager();
        $comments = $commentmanager->getComments();

        require('view/frontend/ListCommentView.php');
    }

    public function inputComment($PostId)
    {
        $creation = new CommentCreator();
        $creation->createComment($PostId);

        if (isset($_SESSION['login'])) {
            if (session_id() === $_SESSION['login'])
                AccueilBackEnd();
        } else {
            require ('index.php?action=default');
        }
    }

    public function commentSuppression($CommentId)
    {
        $commentmanager = new CommentManager();
        $commentsuppression = $commentmanager->CommentSuppression($CommentId);

        require('view/backend/AccueilBackendView.php');
    }

    public function signalComment($CommentId)
    {
        $commentmanager = new CommentManager();
        $signalcomment = $commentmanager->signalComment($CommentId);

        require ('index.php?action=default');
    }
}
