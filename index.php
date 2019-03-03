<?php
// if(!$QUERY_STRING){
//     $url = strip_tags($REQUEST_URI);
//     $url_array=explode("/",$url);
//     array_shift($url_array);
//     print_r($url_array);
//     // $_REQUEST['controller'] = $url_array[0]
// }
session_start();
define("rootPath","http://localhost/GIL/");
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'index';
    }
}else{
    $controller = "home";
    $action = "index";
}
include "route.php";
?>