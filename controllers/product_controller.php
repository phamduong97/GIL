<?php
include "controllers/base_controller.php";
include_once "models/Product.php";
class ProductController extends BaseController{
    public function __construct()
    {
        $this->folder = "product";
    }
    public function search(){
        if(isset($_GET['tag'])){
            $data = array(
                "tag"=>$_GET['tag'],
                "path"=>rootPath."?controller={$_GET['controller']}&action={$_GET['action']}",
                "pathtext"=>"Tìm kiếm"
            );
            $this->render("search",$data);
        }
    }
    public function view(){
        if(!isset($_GET["code"])){
            header("location: index.php?controller=home&action=index");
        }else{
            $data = array(
                "path"=>rootPath."?controller={$_GET['controller']}&action={$_GET['action']}&code={$_GET['code']}",
                "pathtext"=>"Undefined",
                "data"=>array()
            );
            $data['data']=Product::getData($_GET['code']);
            $data['pathtext']=$data['data']['name'];
            $this->render("view",$data);
        }
    }
    
}
?>