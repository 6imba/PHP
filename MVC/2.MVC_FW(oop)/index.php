<!-- url ==> http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?controller=homeModelFunction&function=aboutViewFunction -->

<?php
$controller = 'home';
$function = 'home';

if(isset($_GET['controller']) && $_GET['controller'] !=''){
    $controller = $_GET['controller'];
}
if(isset($_GET['function']) && $_GET['function'] !=''){
    $function = $_GET['function'];
}

include 'Controller/'.$controller.'Controller.php';

$class = $controller.'Controller';
$obj1 = new $class();
$function = $function.'ViewFunction';
$obj1->$function();
?>


<!-- http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?controller=homeController&function=homeViewFunction -->

<!-- 
print_r($controller) ==> home
print_r($class) ==> homeController
print_r($obj1) ==> homeController Object ( ) //without contructor in class homeController
print_r($obj1) ==> homeController Object ( [obj2] => homeModel Object ( ) )   //with contructor in class homeController which instacnciate class homeModel
print_r($this->obj2); ==> homeModel Object ( ) homeController Object ( [obj2] => homeModel Object ( ) )   
//inside homeController class


homeModel Object ( ) homeController Object ( [obj2] => homeModel Object ( ) )
homeController Object ( [obj2] => homeModel Object ( ) )