<?php

include '1.ParentClass.php';

class BaseClass extends ParentClass{
    public function __construct(){
        echo '<br>Hi, I am constructor of Base Class !';
        echo '<br>Calling static_property of parent_class from insdie child_class : '.parent::$static_property;
    }
}

$obj1 = new BaseClass();
echo '<br>Calling static_property of parent class from child_classfile outside child_class : '.Parentclass::$static_property;


?>