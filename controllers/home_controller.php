<?php
include_once "controllers/base_controller.php";
class HomeController extends BaseController{
    public function __construct()
    {
        $this->folder = "home";
    }
    public function index(){
        $data = array(
            "pathtext"=>"Trang chủ",
            "path"=>""
        );
        $this->render('index',$data);
    }
}
?>