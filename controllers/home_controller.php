<?php
include_once "controllers/base_controller.php";
class HomeController extends BaseController{
    public function __construct()
    {
        $this->folder = "home";
    }
    public function index(){
        $this->render('index',array());
    }
}
?>