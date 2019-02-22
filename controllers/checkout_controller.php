<?php
include "controllers/base_controller.php";
class CheckoutController extends BaseController{
    public function __construct()
    {
        $this->folder = "checkout";
    }
    public function cart(){
        $data= array(
            "path"=>"",
            "pathtext"=>"Giỏ hàng"
        );
        

        $this->render("mycart",$data);
    }
    public function checkout(){
        $data= array(
            "path"=>"",
            "pathtext"=>"Đơn hàng"
        );
        $this->render("checkout",$data);
    }
}
?>