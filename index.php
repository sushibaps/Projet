<?php
require_once('controller/PostController.php');
require_once('controller/LoginController.php');
require_once('controller/CommentController.php');
require_once('controller/BackController.php');

$postcontroller = new PostController();
$logincontroller = new LoginController();
$commentcontroller = new CommentController();
$backcontroller = new BackController();

try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listPosts':
                $postcontroller->listPosts();
                break;

            case 'displayPost':
                $postcontroller->displayPost($_GET['id']);
                break;

            case 'listComments':
                $commentcontroller->listComments();
                break;

            case 'login':
                $postcontroller->Login();
                break;

            case 'verifyLogin':
                $logincontroller->VerifyLogin();
                break;

            case 'creation':
                $postcontroller->articleCreation();
                break;

            case 'inputComment':
                $commentcontroller->inputComment($_GET['id']);
                break;

            case 'signalComment':
                $commentcontroller->signalComment($_GET['id']);
                break;

            // Backoffice

            case 'AccueilBackEnd':
                $backcontroller->AccueilBackEnd();
                break;

            case 'articleCreation':
                $postcontroller->articleCreation();
                break;

            case 'inputPost':
                $postcontroller->inputPost();
                break;

            case 'articleSuppression':
                $postcontroller->articleSuppression($_GET['id']);
                break;

            case 'articleModification':
                $postcontroller->articleModification($_GET['id']);
                break;

            case 'modifPost':
                $postcontroller->modifPost($_GET['id']);
                break;

            case 'commentSuppression':
                $commentcontroller->commentSuppression($_GET['id']);
                break;

            case 'Disconnect':
                $logincontroller->Disconnect();
                break;

            default:
                $postcontroller->Home();
        }
    } else {
        $postcontroller->Home();
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}