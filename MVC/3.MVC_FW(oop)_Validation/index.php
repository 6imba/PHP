<!-- url ==> http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?controller=home&function=home -->
<!-- if we didnt pass controller parameter in url then by code below wont $_GET controller and variable $controller remain as 'home' and we donot
 have any controller named as home in our controlller folder so it gives error
 ?controller=home&function=home -->
 <!-- and now if we pass params as  ?controller=homeController&function=homeViewFunction then it wont give error as file exist -->

<?php
$controller = 'home';
$function = 'home';

if(isset($_GET['controller']) && $_GET['controller'] !=''){
    $controller = $_GET['controller']; //controller
}
if(isset($_GET['function']) && $_GET['function'] !=''){
    $function = $_GET['function']; //function
}

$controller_file_class = $controller.'Controller';

if(file_exists('Controller/'.$controller_file_class.'.php')) //controller_validaton
{
    include 'Controller/'.$controller_file_class.'.php';
    $obj1 = new $controller_file_class();
    $function = $function.'ViewFunction';
    if(method_exists($controller_file_class,$function)){ //function_validaton
        $obj1->$function();
    }else{
        echo 'Funtion not found inside current controller !';
    }
    
}else{
    echo "Controller Controller/".$controller.".php not found !";
}
?>



<!-- http://localhost/Root%20Folder%20of%20PHP%20Practise/MVC_Framework/2.MVC_FW(oop)/index.php?controller=homeController&function=homeViewFunction -->


