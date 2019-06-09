<?php
require ('controller/Controller.php');

try
{
    if (isset($_GET['action']))
    {
        switch ($_GET['action'])
        {
            case 'liste':
                listPosts();
            break;

            case 'login':
                login();
            break;

            case 'creation':
                articleCreation();
            break;

            case 'input':
                articleInput();
            break;

            default:
                require('view/frontend/AccueilView.php');
        }
    }
    else
    {
        require("view/frontend/AccueilView.php");
    }
}
catch (Exception $e)
{
    erreur($e->getMessage());
}
