<?php

class homeController{
    public function __construct(){
        $this->intro = 'Hi I am constructor of class homeController<br>';//just a property of class
    }
}

$obj1 = new homeController();
print_r($obj1);


?>