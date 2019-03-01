<?php
include_once "controllers/base_controller.php";
include_once "models/Product.php";
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
        $this->renderAdmin("create",array());
    }
}
?>