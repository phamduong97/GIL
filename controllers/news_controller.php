<?php
include "controllers/base_controller.php";
require_once "models/news.php";
class NewsController extends BaseController{
    public function __construct()
    {    
        $this->folder = "news";
    }

    public function home(){
        $data= array(
            "path"=>"",
            "pathtext"=>"Tin tức",
            "title"=>"Tin tức"
        );
        $data['news'] = News::getAllNews();
        $data['news_relate'] = News::getAllNewsRelate();
        $this->render("home",$data);
    }

    public function detail(){
        $id= $_GET['id'];
        $data= array(
            "path"=>"",
            "pathtext"=>"",
            "title"=>"Tin tức"
        );
        $data['news'] = News::getNewsById($id);
        $data['pathtext'] = $data['news']['TieuDe'];
        $data['title'] = $data['news']['TieuDe'];
        $data['comment'] = News::getCommentById($id);
        $this->render("detail",$data);
    }

    public function comment(){
        $id= $_GET['id'];
        $iduser= $_SESSION['userid'];
        $comment = $_GET['comment'];
        News::addComment($id,$iduser,$comment);
        $this->render("detail");
    }

    
}
?>