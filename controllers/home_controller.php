<?php
include_once "controllers/base_controller.php";
include_once "models/Product.php";
include_once "models/Account.php";
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
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 9;
        $data['product'] = Product::getAllProductsByPage($limit,$current_page);
        
        $data['data1'] = Product::getAllProducts();
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
    public function loginmember(){
        $email = $_GET['email'];
        $password = $_GET['password'];
        $data = Account::login($email,$password);
        $this->render("index",$data);
    }

    public function logout(){
    	Account::logout();
    }
}
?>