<?php
session_start();

function VerifyLogin()
{
    require('model/Login.php');

    $login = new Login();
    $data = $login->getLogs();
    if (password_verify($_POST['password'], $data['password']))
    {
        $_SESSION['login'] = 1;
        require('view/backend/AccueilBackendView.php');
    }
    else
        require ('view/frontend/ErrorView.php');
}

function Disconnect()
{
    session_destroy();

    require ('model/PostManager.php');

    $postmanager = new PostManager();
    $firstpost = $postmanager->getFirstPost();

    require ('view/frontend/AccueilView.php');
}