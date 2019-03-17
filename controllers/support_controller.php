<?php
include "controllers/base_controller.php";
include "models/Ticket.php";
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
        $data['ticket'] = Ticket::getTicket();
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
    public function ticket(){
        print_r($_POST);
        if(!isset($_POST['smbtn'])){
            header("location: index.php");
            exit();
        }
        $data=array(
            "name"=>$_POST['name'],
            "email"=>$_POST['email'],
            "question"=>$_POST['content']
        );
        $result = Ticket::createTicket($data);
        $_SESSION['ticket_add'] = $result;
        header("location: ".rootPath."?controller=support&action=faq");
    }
    public function search(){
        $result = Ticket::getTicket(5,$_POST['keyword']);
        print_r(json_encode($result));
    }
}

?>