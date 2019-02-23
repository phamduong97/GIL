<?php
class BaseController{
    protected $folder;
    public function render($file,$data){
        $view_file = "views/".$this->folder."/".$file.".php";
        if(is_file($view_file)){
            extract($data);
            ob_start();
            include $view_file;
            $content = ob_get_clean();
            include "views/layout/application.php";
        }
    }
    public function renderAdmin($file,$data){
        $view_file = "views/admin/".$this->folder."/".$file.".php";
        if(is_file($view_file)){
            extract($data);
            ob_start();
            include $view_file;
            $content = ob_get_clean();
            include "views/layout/admin.php";
        }

    }
}
?>