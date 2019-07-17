<?php
require_once ('PostController.php');
require_once ('LoginController.php');
require_once ('CommentController.php');

class GlobalController{
    public $postcreator;
    public $logincontroller;
    public $commentcontroller;
    public function __construct(){
        $this->postcreator = new PostController();
        $this->logincontroller = new LoginController();
        $this->commentcontroller = new CommentController();
    }
}
