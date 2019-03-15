<?php
$controlList = array(
    'home'=>['index'],
    'account'=>['login'],
    'product'=>['search','view','addcart','getProducts'],
    'checkout'=>['cart','checkout','destroycart','voucher'],
    'support'=>['faq','maintance']
);
$adminList = array(
    'product'=>['create','index']
);


if($controller=="admin"){
    $act = explode('/',$action);
    if(!array_key_exists($act[0],$adminList) || !in_array($act[1],$adminList[$act[0]])){
        $controller = 'page';
        $action = 'error';
    }

    include_once "controllers/admin_".$act[0]."_controller.php";
    $klass = "Admin".str_replace("_","",ucwords($act[0],"_"))."Controller";
    $controller = new $klass;
    $action = $act[1];
    $controller->$action();
}else{
    if(!array_key_exists($controller,$controlList) || !in_array($action,$controlList[$controller])){
        $controller = 'page';
        $action = 'error';
    }

    include_once "controllers/".$controller."_controller.php";
    $klass = str_replace("_","",ucwords($controller,"_"))."Controller";
    $controller = new $klass;
    $controller->$action();
}
?>