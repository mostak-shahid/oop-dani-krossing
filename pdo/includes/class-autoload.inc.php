<?php
/*
//version 1
spl_autoload_register('myAutoLoader);
function myAutoLoader($className) {
    $path = "classes/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;
    if (!file_exists($fullPath)) {
        return false;
    }
    require_once $fullPath;
}*/
//version 2
spl_autoload_register('myAutoLoader');
function myAutoLoader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'includes')){
        $path = "../classes/";
    } else {
        $path = "classes/";
    }
    
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;
    if (!file_exists($fullPath)) {
        echo "Could not find the file called "  . $className ;
    }
    require_once $fullPath;
}