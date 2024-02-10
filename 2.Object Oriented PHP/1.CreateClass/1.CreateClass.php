<?php

class Oneclass//create class...
{
    //properties and methods goes here.....
}
$objone = new Oneclass;//access inside the class by instantiating class which means we are creating an object that contains all the info regarding the class
var_dump($objone);
echo "<br>";

$obj1 = new Oneclass;
var_dump($obj1);
echo "<br>";

class Twoclass//create class...
{
    //write property
    public $info = "This is string or property !";
    public $data1 = 1231233123;
    public $data2 = 123123123127457658657545897987676677523123;
}
$objtwo = new Twoclass;//create object
var_dump($objtwo);

?>