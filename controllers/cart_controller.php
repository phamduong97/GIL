<?php
include "controllers/base_controller.php";
include "models/Cart.php";
include "models/Product.php";
class CartController extends BaseController{
    public function __construct()
    {    
        $this->folder = "cart";
    }

    public function view(){
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

    public function addcart(){
        if(isset($_POST['code'])){
            if(isset($_POST['count'])){
                $_SESSION['cart'][$_POST['code']]['quantity']=(int)$_POST['count'];
            }else{
                if(isset($_SESSION['cart'][$_POST['code']])){
                    $_SESSION['cart'][$_POST['code']]['quantity']++;
                }else{
                    if(!isset($_SESSION['cart'])){
                        $_SESSION['cart']=array();
                    }
                    $data = Product::getData($_POST['code']);
                    print_r($data);
                    $thumbnail = explode(";",$data['image'])[0];
                    $_SESSION['cart'][$_POST['code']] = array(
                        'pid' => $data['ID'],
                        'name'=>$data['name'],
                        'price'=> ($data['price']*(100-$data['sale'])/100),
                        'thumbnail'=>$thumbnail,
                        'quantity'=>1
                    );
                }
            }
        }
        exit();
    }

    public function destroycart(){
        print_r($_SESSION['cart']);
        if(isset($_POST['btndestroy'])){
            unset($_SESSION['cart']);
            echo "Đã hủy rỏ hàng";
        }
    }
    public function checkout(){
        $data= array(
            "title"=>"Đơn hàng",
            "path"=>"",
            "pathtext"=>"Đơn hàng",
            "product"=>$_SESSION['cart']
        );
        if(isset($_SESSION['vcode'])){
            $data['voucher'] = $_SESSION['vcode'];
        }else{
            $data['voucher'] = "";
        }
        $this->render("checkout",$data);
    }

    public function voucher(){
        $status = 0;
        if(isset($_POST['vcode'])){
            $_SESSION['vcode'] = $_POST['vcode'];
            $status = 1;
        }
        echo $status;
    }
    public function order(){
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['cart']) ){
            $result = Cart::addOrder();
            if($result){
                $data = array(
                    "path"=>"",
                    "pathtext"=>"Đơn hàng",
                    "title"=>"Đơn hàng"
                );
                $this->render("order",$data);
            }else{
                header('location: index.php');
            }
        }else{
            header('location: index.php');
        }
        
    }
    
    
}
?>
