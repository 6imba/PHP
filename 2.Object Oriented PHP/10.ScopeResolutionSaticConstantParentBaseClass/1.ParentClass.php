<?php

//parent_class
class ParentClass{

    //constant
    const CONSTVAR = 'Hi, I am CONSTANT !';

    //static_property
    public static $static_property = 'HI, I am static property !';

    //static_function
    public static function static_function(){
        return 'Hi, I am static function !';
    }

    //calling static_property inside static_function within same class
    public static function static_function1(){
        return Parentclass::$static_property;
    }

}

//calling CONSTANT
echo Parentclass::CONSTVAR; 
echo '<br>';

//calling static function_&_property outside the class
echo Parentclass::$static_property;
echo '<br>';
echo Parentclass::static_function();
echo '<br>';
echo Parentclass::static_function1(); //calling static_function, that calls static_property inside itself within same class

?>