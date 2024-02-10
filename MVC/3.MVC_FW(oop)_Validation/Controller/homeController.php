<?php
// //level1

// class homeController{

//     public function __construct(){
//         echo 'Controller_class_constructor called !<br>';
//         include ('Model/homeModel.php');
//         $this->obj = new homeModel();
//     }

//     public function homeViewFunction(){
//         $arr=$this->obj->homeModelFunction();
//         print_r($arr);
//         echo '<br>';
//         echo 'HomePageViewFuntion<br>';
//         include('View/header.php');
//         include('View/page.php');
//         include('View/footer.php');
//     }

//     public function aboutViewFunction(){
//         $arr=$this->obj->aboutModelFunction();
//         print_r($arr);
//         echo '<br>';
//         echo "AboutPageViewFuntion<br>";
//         include('View/header.php');
//         include('View/page.php');
//         include('View/footer.php');
//     }

//     public function contactViewFunction(){
//         $arr=$this->obj->contactModelFunction();
//         print_r($arr);
//         echo '<br>';
//         echo "ContactPageViewFuntion<br>";
//         include('View/header.php');
//         include('View/page.php');
//         include('View/footer.php');
//     }

// }

?>


<?php
//level2

class homeController{

    public function __construct(){
        echo 'Controller_class_constructor called !<br>';
        include ('Model/homeModel.php');
        $this->obj = new homeModel();
    }

    public function homeViewFunction(){
        $arr=$this->obj->ModelFunction('Home');
        print_r($arr);
        echo '<br>';
        echo 'HomePageViewFuntion<br>';
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/3.MVC_FW(oop)_Validation/?function=home

    public function aboutViewFunction(){
        $arr=$this->obj->ModelFunction('About');
        print_r($arr);
        echo '<br>';
        echo "AboutPageViewFuntion<br>";
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/3.MVC_FW(oop)_Validation/?function=about

    public function contactViewFunction(){
        $arr=$this->obj->ModelFunction('Contact');
        print_r($arr);
        echo '<br>';
        echo "ContactPageViewFuntion<br>";
        include('View/header.php');
        include('View/page.php');
        include('View/footer.php');
    }//http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/3.MVC_FW(oop)_Validation/?function=contact

}

?>





