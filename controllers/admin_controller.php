<?php
include "controllers/base_controller.php";
class AdminController extends BaseController{
    public function __construct()
    {
        $this->folder = "admin";
    }
    public function index(){
        echo "Trang index";
    }
}
?>