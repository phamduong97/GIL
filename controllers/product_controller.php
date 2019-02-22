<?php
include "controllers/base_controller.php";
include "connection.php";
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
        if(!isset($_GET["id"])){
            header("location: index.php?controller=home&action=index");
        }else{
            $data = array(
                'path'=>rootPath."?controller={$_GET['controller']}&action={$_GET['action']}&id={$_GET['id']}",
                "pathtext"=>"TOUHOU GENSO WANDERER",
                'id'=>$_GET['id']
            );

            
            $this->render("view",$data);
        }
    }
}
?>