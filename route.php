<?php
$controlList = array(
    'home'=>['index','intro','copyright','security','term','loginmember','logout'],
    'account'=>['login','forgetpass','sendmail','resetpass',
                'changepass','accountmanager','addmoney','processaddmoney','register',
                'registermember','news','newdetail','order'],
    'product'=>['search','view','getProducts','comment','addcomment','delcomment'],
    'support'=>['faq','maintance','ticket','search'],
    'cart'=>['view','destroycart','checkout','voucher','addcart','order'],
    'news'=>['home','detail','comment']
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