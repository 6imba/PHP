<?php
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) { //$model(object_of_Model_class) and $controller(object_of_Controller_class)
    $this->controller = $controller;
    $this->model = $model;
    }

    public function output(){
    print_r($this->model);
    echo '<br>';
    print_r($this->controller);
    echo '<br>';
    
    return "<p>" . $this->model->string . "</p>";
    //here, as private $this->model(private $model;) hold the $model(object_of_Model_class) we can call public $string of class Model using $this->model(private $model;)
    }
}