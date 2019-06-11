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

            case 'listComments':
                listComments();
            break;

            case 'articleCreation':
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
