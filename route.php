<?php
$controlList = array(
    'home'=>['index'],
    'account'=>['login']
);

if(!array_key_exists($controller,$controlList) || !in_array($action,$controlList[$controller])){
    $controller = 'page';
    $action = 'error';
}

include_once "controllers/".$controller."_controller.php";
$klass = str_replace("_","",ucwords($controller,"_"))."Controller";
$controller = new $klass;
$controller->$action();
?>