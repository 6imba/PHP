<?php

class Oneclass//class
{
    protected $OneProperty = "Hello World I am Protected ";//protected property
}

class Twoclass extends Oneclass//class
{
    public function Twomethod()//public method
    {
        return $this->OneProperty;//when we extends Twoclass upto Oneclass this-> statement will kind of reference both as a single whole class... 
    }
}

?>





<!-- 
PHP - Inheritance and the Protected_Access_Modifier
In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class.
What does that mean?
Let's look at an example: 
-->

<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//   }
// }

// // Try to call all three methods from outside class
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public
// $strawberry->intro(); // ERROR. intro() is protected
?>

<!-- In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error. public methods will work fine! -->