<?php
    class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    }

    $obj1 = new Fruit();
    // var_dump($obj1);

    $obj1->set_name("Amir");
    // $obj1Name = $obj1->set_name("Amir");
    // var_dump($obj1Name)
    // var_dump($obj1->name)
    echo $obj1->get_name();


?>


<!-- 

    built-in pre-defined class
    user-defined class
    new object
    this properties and method
    class __construct method

    set object property by:
        1. By method inside class defination: function set_name($name) {$this->name = $name;}
        2. By call object property and gives its value from out side of class: $apple = new Fruit(); $apple->name = "Apple";
        3. _construct method

-->