<?php
include "controllers/base_controller.php";
include_once "models/account.php";
class AccountController extends BaseController{
    public function __construct()
    {
        $this->folder = "account";
    }
    
    public function login(){
        $data= array(
            'path'=>"",
            'pathtext'=>"Đăng nhập",
            'title'=>"Đăng nhập"
        );
        if(isset($_GET['checkout'])){
            $_SESSION['checkout']=$_GET['checkout'];
        }
        $this->render("login",$data);
    } 
    

    public function order(){
        $data= array(
            'path'=>"",
            'pathtext'=>"Lịch sử mua hàng",
            'title'=>"Lịch sử mua hàng"
        );
        $id = $_SESSION['userid'];
        $data['orders'] = Account::getOrderById($id);
        $this->render("order",$data);
    }
     public function forgetpass(){
        $data= array(
            'path'=>"",
            'pathtext'=>"Quên mật khẩu",
            'title'=>"Quên mật khẩu"
        );
        $this->render("forgetpass",$data);
    } 

     public function sendmail(){
        $email = $_GET['email'];
         $mail = new Account();
       $data= $mail->sendmail($email);
        $this->render("forgetpass",array(),array());
    } 

    public function resetpass(){
        $this->render("resetpass",array(),array());
    }

     public function changepass(){
        $token = $_GET['token'];
        $email = $_GET['email'];
        $password = $_GET['newpass'];
         $mail = new Account();
       $data= $mail->changepass($email,$token,$password);
    }

    public function accountmanager(){
        $data= array(
            'path'=>"",
            'pathtext'=>"Thông tin cá nhân",
            'title'=>"Thông tin cá nhân"
        );
        $this->render("accountmanager",$data);
    }

    public function addmoney(){
        $data= array(
            'path'=>"",
            'pathtext'=>"Nạp tiền",
            'title'=>"Nạp tiền"
        );
        $this->render("addmoney",$data);
    }

    public function processaddmoney(){
        $id= $_GET['id'];
        $sale= $_GET['sale'];
        $series= $_GET['series'];
        $code= $_GET['code'];
        Account::addmoney($id,$sale,$series,$code);
        $this->render("addmoney");
    }

     public function register(){
        $data= array(
            "path"=>"",
            "pathtext"=>"Đăng ký tài khoản",
            "title"=>"Đăng ký tài khoản"
        );
        $this->render("register",$data);
    }
    public function registermember(){
        $name = $_GET['name'];
        $fullname = $_GET['fullname'];
        $email = $_GET['email'];
        $mobile = $_GET['mobile'];
        $pass = $_GET['password'];
        $member = new Account();
        $member->register($name,$fullname,$email,$mobile,$pass);
        $this->render("register");
    }

     public function news(){
        $this->render("news",array());
    }

    public function newdetail(){
        $this->render("newdetail",array());
    }
}
?>