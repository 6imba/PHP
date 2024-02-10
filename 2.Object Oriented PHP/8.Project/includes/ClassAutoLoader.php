<?php
spl_autoload_register('myClassLoader');

function myClassLoader($className){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'includes') !== false){
        $path = "../classes/";
    }
    else{
        $path = "classes/";
    }
    
    $extension = ".class.php";
    include_once $path.$className.$extension;
}
?> 