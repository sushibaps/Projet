<?php
require('controller/BackController.php');
require('controller/GlobalController.php');
$globalcontroller = new GlobalController();

try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listPosts':
                $globalcontroller->postcreator->listPosts();
                break;

            case 'displayPost':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->postcreator->displayPost($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'listComments':
                $globalcontroller->commentcontroller->listComments();
                break;

            case 'login':
                $globalcontroller->postcreator->Login();
                break;

            case 'verifyLogin':
                $globalcontroller->logincontroller->VerifyLogin();
                break;

            case 'creation':
                $globalcontroller->postcreator->articleCreation();
                break;

            case 'inputPost':
                $globalcontroller->postcreator->inputPost();
                break;

            case 'inputComment':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    if ($_POST['comment'] != "" AND $_POST['author'] != "")
                        $globalcontroller->commentcontroller->inputComment($_GET['id']);
                    else
                        require ('view/frontend/ErrorView.php');
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'signalComment':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->commentcontroller->signalComment($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            // Backoffice

            case 'AccueilBackEnd':
                AccueilBackEnd();
                break;

            case 'articleCreation':
                $globalcontroller->postcreator->articleCreation();
                break;

            case 'articleSuppression':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->postcreator->articleSuppression($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'articleModification':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->postcreator->articleModification($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'modifPost':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->postcreator->modifPost($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'commentSuppression':
                if (isset($_GET['id']) AND is_numeric($_GET['id']))
                    $globalcontroller->commentcontroller->commentSuppression($_GET['id']);
                else
                    require('view/frontend/ErrorView.php');
                break;

            case 'Disconnect':
                $globalcontroller->logincontroller->Disconnect();
                break;

            default:
                $globalcontroller->postcreator->Home();
        }
    } else {
        $globalcontroller->postcreator->Home();
    }
} catch (Exception $e) {
    erreur($e->getMessage());
}
