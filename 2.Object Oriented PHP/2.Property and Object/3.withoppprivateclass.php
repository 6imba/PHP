<?php
    class Personality//class
    {
        //properties
        public $name;
        public $age;
        //private $fruit='apple';
        public $fruit='apple';

        //method to define property
        public function SetInfo($data1,$data2)
        {
            $this->name=$data1;
            $this->age=$data2;
            echo $this->name." ".$this->age." barsa vayo hai Guyz !!!"."<br>";
            // $this keyword point to the specific class where it is written
            //here we pass data from 2.withoop.php fie as $data1 and $data2
            //here u can see the diffenrence between property($name) and variable(($data1)
        }
    }
    $obj = new Personality;
    echo  $obj->fruit;
    echo "Hello World I am Class of 2.withoop.php file !<br>";
?>