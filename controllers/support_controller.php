<?php
include "controllers/base_controller.php";
class SupportController extends BaseController{
    public function __construct() {
        $this->folder = "support";
    }
    public function faq()
    {
        $data=array(
            "title"=>"FAQ Câu hỏi thường gặp",
            "path"=>"?controller=support&action=faq",
            "pathtext"=>"FAQ"
        );
        $this->render("faq",$data);
    }
    public function maintance()
    {
        # code...
        $data=array(
            "title"=>"Bảo hành",
            "path"=>"?controller=support&action=maintance",
            "pathtext"=>"Bảo hành"
        );
        $this->render("maintance",$data);
    }
}

?>