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
}
?>