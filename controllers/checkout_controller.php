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
                "path"=>"",
                "pathtext"=>"Giỏ hàng"
            );
            $data['product'] = $_SESSION['cart'];
            $this->render("mycart",$data);
        }
        
    }
    public function checkout(){
        $data= array(
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
}
?>