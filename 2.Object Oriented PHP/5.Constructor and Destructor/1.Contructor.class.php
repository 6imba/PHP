<?php
    class Person//class
    {
        public $name,$age,$country;//public_property

        public function __construct($data11,$data22,$data33) //public_constructor
        {
            $this->name = $data11;
            $this->age = $data22;
            $this->country = $data33;
        }

        public function SetInfo($data1,$data2,$data3)//public_method
        {
            $this->name=$data1;
            $this->age=$data2;
            $this->country=$data3;
        }
//here what is difference between __construct() and SetInfo()

        public function GetInfo()
        {
            return $this->name;
        }

    }
?>