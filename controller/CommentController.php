<?php
require_once('model/CommentManager.php');
require_once('model/PostManager.php');

class CommentController
{

    public function __construct()
    {
        $this->commentmanager = new CommentManager();
        $this->postmanager = new PostManager();
    }

    public function listComments()
    {
        $comments = $this->commentmanager->getComments();

        require('view/frontend/ListCommentView.php');
    }

    public function inputComment($PostId)
    {
        if (isset($PostId) AND is_numeric($PostId) AND $_POST['comment'] != "" AND $_POST['author'] != "") {
            $this->commentmanager->createComment($PostId);
            if (isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
                require('view/backend/AccueilBackendView.php');
            } else {
                $firstpost = $this->postmanager->getFirstPost();

                require('view/frontend/AccueilView.php');
            }
        } else {
            $error = "Veuillez entrer un commentaire";
            $post = $this->postmanager->getPost($PostId);

            $comment = $this->commentmanager->getCommentsForPost($PostId);

            require('view/frontend/DisplayPostView.php');
        }

    }

    public function commentSuppression($CommentId)
    {
        if (isset($CommentId) AND is_numeric($CommentId) AND isset($_SESSION['login']) AND session_id() === $_SESSION['login']) {
            $commentsuppression = $this->commentmanager->CommentSuppression($CommentId);

            require('view/backend/AccueilBackendView.php');
        } else {
            $error = "commentsuppression";
            require('view/frontend/ErrorView.php');
        }

    }

    public function signalComment($CommentId)
    {
        if (isset($CommentId) AND is_numeric($CommentId)) {
            $signalcomment = $this->commentmanager->signalComment($CommentId);
            $firstpost = $this->postmanager->getFirstPost();

            require('view/frontend/AccueilView.php');
        } else {
            $error = "signalcomment";
            require('view/frontend/ErrorView.php');
        }

    }
}
