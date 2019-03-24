<?php 
include "controllers/base_controller.php";
require_once "models/pagination.php";
class PaginationController extends BaseController{
	public function __construct()
	{
		$this->folder = "home";
	}
     public function view(){
     	   $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
           $limit = 6;
     	   $page = new Pagination();
     	  $data = $page->getAllProductsByPage($limit,$current_page);
         // $this->render("index",array(),array());
     }
        


}



 ?>