<?php
    $page = 'home';
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    include('Model/model.php');//include/call data
    if($page=='home'){
        include 'View/home.php'; //since its included from index.php no ../ needed
    }
    elseif($page=='about'){
        include 'View/about.php';
    }
    else{
        include 'View/404.php'; 
    }
?>  
<!-- http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/  ==>  gives output  ==>  home
http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/1.MVC_FW/index.php?page=about  ==>  gives output  ==>  about.php
http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/1.MVC_FW/index.php?page=home  ==>  gives output  ==>  home.php 
http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/1.MVC_FW/index.php?page=404  ==>  gives output  ==>  404.php 

When you get into MVC_Framework you get into index.php.
By default its url is http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/
so it gives $page = $_GET['page] = home
output : View/home.php
But if you add index.php?page=about, i.e :
http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/index.php?page=about  ==>  $page = $_GET['page] = about 
output : View/about.php

