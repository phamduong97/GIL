<?php
include "controllers/base_controller.php";
include_once "models/Product.php";
include_once "models/Category.php";
class ProductController extends BaseController{
    public function __construct()
    {
        $this->folder = "product";
    }
    public function search(){
        $data = array(
            "title"=>"Tìm kiếm",
            "path"=>rootPath."?controller={$_GET['controller']}&action={$_GET['action']}",
            "pathtext"=>"Tìm kiếm"
        );
        $data['keyword'] = isset($_GET['keyword'])?$_GET['keyword']:(isset($_POST['keyword'])?$_POST['keyword']:"");
        $data['product'] = Product::searchProducts(array(
            "keyword"=> $data['keyword'],
            "category"=>0,
            "inwhere"=> "name",
            "counter" => 10,
            "sortmode"=>1
        ));
        $data['category']=Category::getAllCategory();
        $data['keyword'] = isset($_GET['keyword'])?$_GET['keyword']:"";
        $this->render("search",$data);
    }
    public function getProducts(){
        $data = array(
            "keyword"=>$_GET['keyword'],
            "category"=>$_GET['category'],
            "inwhere"=> $_GET['inwhere'],
            "counter" => $_GET['counter'],
            "sortmode"=>$_GET['sortmode']
        );
        $result = Product::searchProducts($data);
        print_r(json_encode($result));
    }
    public function view(){
        if(!isset($_GET["code"])){
            header("location: index.php?controller=home&action=index");
        }else{
            $data = array(
                "title"=>"Thông tin sản phẩm",
                "path"=>rootPath."?controller={$_GET['controller']}&action={$_GET['action']}&code={$_GET['code']}",
                "pathtext"=>"Undefined",
                "data"=>array()
            );
            $data['data']=Product::getData($_GET['code']);
            $data['title']=$data['data']['name'];
            $data['pathtext']=$data['data']['name'];
            $this->render("view",$data);
        }
    }
    public function comment(){
        if(isset($_GET['pro_id'])){
            $comment = Product::getComment($_GET['pro_id']);
            print_r(json_encode($comment));
        }
    }
    // public function addcart(){
    //     if(isset($_POST['code'])){
    //         if(isset($_POST['count'])){
    //             $_SESSION['cart'][$_POST['code']]['quantity']=(int)$_POST['count'];
    //         }else{
    //             if(isset($_SESSION['cart'][$_POST['code']])){
    //                 $_SESSION['cart'][$_POST['code']]['quantity']++;
    //             }else{
    //                 if(!isset($_SESSION['cart'])){
    //                     $_SESSION['cart']=array();
    //                 }
    //                 $data = Product::getData($_POST['code']);
    //                 $thumbnail = explode(";",$data['image'])[0];
    //                 $_SESSION['cart'][$_POST['code']] = array(
    //                     'name'=>$data['name'],
    //                     'price'=>$data['price'],
    //                     'thumbnail'=>$thumbnail,
    //                     'quantity'=>1
    //                 );
    //             }
    //         }
    //         echo "Đã thêm vào rỏ";
    //     }else{
    //         echo "Không thể thêm vào giỏ";
    //     }
    // }
    public function addcomment()
    {
        $result = Product::addComment($_GET['pro_id'],$_GET['content'],$_SESSION['userid']);
        return $result;
    }
    public function delcomment()
    {
        if(isset($_GET['id'])){
            $result = Product::delComment($_GET['id']);
            return $result;
        }else{
            return "get no id";
        }
    }
}
?>