<?php
include_once "controllers/base_controller.php";
class HomeController extends BaseController{
    public function __construct()
    {
        $this->folder = "home";
    }
    public function index(){
        $data = array(
            "title"=>"Trang chủ Game Is Life",
            "pathtext"=>"Trang chủ",
            "path"=>""
        );
        $this->render('index',$data);
    }
    public function intro(){
        $data = array(
            "title"=>"Giới thiệu",
            "pathtext"=>"",
            "path"=>""
        );
        $this->render("intro",$data);
    }
    public function copyright()
    {
        $data = array(
            "title"=>"Game bản quyền",
            "pathtext"=>"Game bản quyền",
            "path"=>""
        );
        $this->render("copyright",$data);
    }
    public function security()
    {
        $data = array(
            "title"=>"Chính sách bảo mật",
            "pathtext"=>"Chính sách bảo mật",
            "path"=>""
        );
        $this->render("security",$data);
    }
    public function term(){
        $data = array(
            "title"=>"Điều khoản dịch vụ",
            "pathtext"=>"Điều khoản dịch vụ",
            "path"=>""
        );
        $this->render("term",$data);
    }
}
?>