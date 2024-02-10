<?php
include 'controller.php';
include 'model.php';
include 'view.php';
$model = new Model(); // print_r($model) ==> Model Object ( [string] => MVC + PHP = Awesome! )
$controller = new Controller($model); // print_r($this->controller); => Controller Object ( [model:Controller:private] => Model Object ( [string] => MVC + PHP = Awesome! ) ) as Controller_class private $model; hold $model(object_of_Model_class)
$view = new View($controller, $model); //print_r($this->controller); => View Object ( [model:View:private] => Model Object ( [string] => MVC + PHP = Awesome! ) [controller:View:private] => Controller Object ( [model:Controller:private] => Model Object ( [string] => MVC + PHP = Awesome! ) ) ) as View_class private $model and  private $controller hold $model(object_of_Model_class) and $controller(object_of_Controller_class) respectively
echo $view->output();
?>


<!-- here, 
First go to model.php ($model = new Model();) and instanciate Model_class that set public_property_$string; of Model class as 'MVC + PHP = Awesome!'
$model in index1.php hold object of Model_class.
Then go to controller.php ($controller = new Controller($model);) and instanciate Controller_class that set private_property_$model of Controller_class as $model(object_of_Model_class) as we pass $model(object_of_Model_class) to Controller_construct while instanciating object of contoller_class
$controller in index1.php hold object of Controller_class.
Then go to view.php ($view = new View($controller, $model);) and instanciate View_class that set private_property_$model_&_$controller of View_class as $model(object_of_Model_class) and $controller(object_of_Controller_class) as we pass $model(object_of_Model_class) and $controller(object_of_Controller_class) to View_construct while instanciating object of View_class
$controller in index1.php hold object of Controller_class. -->
