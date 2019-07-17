<?php
session_start();
require_once('model/Login.php');
require_once('model/PostManager.php');

class LoginController
{

    public function VerifyLogin()
    {
        $login = new Login();
        $data = $login->getLogs();
        if (password_verify($_POST['password'], $data['password'])) {
            $_SESSION['login'] = session_id();
            require('view/backend/AccueilBackendView.php');
        } else
            require('view/frontend/ErrorView.php');
    }

    public function Disconnect()
    {
        session_destroy();

        $postmanager = new PostManager();
        $firstpost = $postmanager->getFirstPost();

        require('view/frontend/AccueilView.php');
    }
}