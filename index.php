<?php
require('controller/PostController.php');
require ('controller/CommentController.php');

try
{
    if (isset($_GET['action']))
    {
        switch ($_GET['action'])
        {
            case 'listPosts':
                listPosts();
            break;

<<<<<<< HEAD
            case 'listComments':
                listComments();
            break;

            case 'articleCreation':
=======
            case 'login':
                login();
            break;

            case 'creation':
>>>>>>> ad97ffd6814d0c5988c992fe95a05d8a6b37264d
                articleCreation();
            break;

            case 'commentCreation':
                commentCreation();
            break;

            case 'inputPost':
                inputPost();
            break;

            case 'inputComment':
                inputComment();
            break;

            case 'login';
                Login();
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
