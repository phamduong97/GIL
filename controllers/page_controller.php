<?php
include "controllers/base_controller.php";
class PageController extends BaseController{
    public function __construct()
    {
        $this->folder = "page";
    }
    public function error(){
        $data=array(
            'path'=>'',
            'pathtext'=>'Lỗi'
        );
        $this->render("error",$data);
    }
}
?>