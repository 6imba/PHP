<?php

class homeController{

    public function __construct(){
        echo 'homeController class Contructor <br>';
        include ('Model/homeModel.php');
        $this->obj2 = new homeModel(); // instanciate object of this class homeModel
        // print_r($this->obj2);
    }

    public function homeViewFunction(){
        $arr=$this->obj2->homeModelFunction();
        print_r($arr);
        echo '<br>';
        echo 'HomePageViewFuntion inside  Controller<br>';
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?function=home

    public function aboutViewFunction(){
        $arr=$this->obj2->aboutModelFunction();
        print_r($arr);
        echo "AboutPageViewFuntion inside  Controller<br>";
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?function=about

    public function contactViewFunction(){
        $arr=$this->obj2->contactModelFunction();
        print_r($arr);
        echo "ContactPageViewFuntion inside  Controller<br>";
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?function=contact

}

?>


