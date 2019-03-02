<?php
include_once "controllers/base_controller.php";
include_once "models/Product.php";
include_once "models/Category.php";
include_once "models/Producer.php";
class AdminProductController extends BaseController{
    public function __construct()
    {
        $this->folder = "product";
    }
    public function index(){
        $data = array();
        $data['data'] = Product::getAll();
        $this->renderAdmin("index",$data);
    }
    public function create(){
        if(isset($_POST['btncreate'])){
            $data = $_POST;
            Product::create($data);
        }
        $data['category']=Category::getAllCategory();
        $data['producer']=Producer::getAllProducer();
        $this->renderAdmin("create",$data);
    }
}
?>