<?php
include_once "models/Category.php";
include_once "models/Product.php";
class BaseController{
    protected $folder;
    public function render($file,$data=array(),$data2=array()){
        $view_file = "views/".$this->folder."/".$file.".php";
        $nav_category = Category::getAllCategory();
        $top5 = Product::getTop5();
        if(is_file($view_file)){
            extract($data);
            ob_start();
            include $view_file;
            $content = ob_get_clean();
            include "views/layout/application.php";
        }
    }
    public function renderAdmin($file,$data=array()){
        $view_file = "views/admin/".$this->folder."/".$file.".php";
        if(is_file($view_file)){
            extract($data);
            ob_start();
            include $view_file;
            $content = ob_get_clean();
            include "views/admin/layout/application.php";
        }

    }
}
?>