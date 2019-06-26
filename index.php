<?php
require('controller/PostController.php');
require ('controller/CommentController.php');
require ('controller/LoginController.php');

try
{
    if (isset($_GET['action']))
    {
        switch ($_GET['action'])
        {
            case 'listPosts':
                listPosts();
            break;

            case 'displayPost':
                displayPost($_GET['id']);
            break;

            case 'listComments':
                listComments();
            break;

            case 'articleCreation':
                articleCreation();
            break;
            
            case 'login':
                Login();
            break;

            case 'verifyLogin':
                VerifyLogin();
            break;

            case 'creation':
                articleCreation();
            break;

            case 'inputPost':
                inputPost();
            break;

            case 'inputComment':
                inputComment();
            break;

            case 'Disconnect':
                Disconnect();
            break;

            default:
                Home();
        }
    }
    else
    {
        Home();
    }
}
catch (Exception $e)
{
    erreur($e->getMessage());
}
