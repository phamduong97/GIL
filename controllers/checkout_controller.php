<?php
include "controllers/base_controller.php";
class CheckoutController extends BaseController{
    public function __construct()
    {
        $this->folder = "checkout";
    }
    public function cart(){
        if(!isset($_SESSION['cart'])){
            header("location: ".rootPath);
        }else{
            $data= array(
                "title"=>"Giỏ hàng của bạn",
                "path"=>"",
                "pathtext"=>"Giỏ hàng"
            );
            $data['product'] = $_SESSION['cart'];
            if(isset($_SESSION['vcode'])){
                $data['voucher'] = $_SESSION['vcode'];
            }else{
                $data['voucher'] = "";
            }
            $this->render("mycart",$data);
        }
        
    }
    public function checkout(){
        $data= array(
            "title"=>"Đơn hàng",
            "path"=>"",
            "pathtext"=>"Đơn hàng",
            "product"=>$_SESSION['cart']
        );
        $this->render("checkout",$data);
    }
    public function destroycart(){
        print_r($_SESSION['cart']);
        if(isset($_POST['btndestroy'])){
            unset($_SESSION['cart']);
            echo "Đã hủy rỏ hàng";
        }
    }
    public function voucher(){
        $status = 0;
        if(isset($_POST['vcode'])){
            $_SESSION['vcode'] = $_POST['vcode'];
            $status = 1;
        }
        echo $status;
    }
}
?>