<?php
    class Personality//class
    {
        //properties
        public $name;
        public $age;

        //method to define property
        public function SetInfo($data1,$data2)
        {
            $this->name=$data1;
            $this->age=$data2;
            echo $this->name." ".$this->age." barsa vayo hai Guyz !!!"."<br>";
            // $this keyword point to the specific object of a class where it is written
            //here we pass data from 2.withoop.php fie as $data1 and $data2
            //here u can see the diffenrence between property($name) and variable(($data1) i.e name=$data1
        }
    }
    echo "Hello World I am Class of 2.withoop.php file !<br>";
?>