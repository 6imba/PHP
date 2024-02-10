<?php
    class Person//class
    {
        private $name,$age,$country;

        public function __construct($data11,$data22,$data33)
        {
            echo "This class has been instantiated !<br>";
            $this->name = $data11;
            $this->age = $data22;
            $this->country = $data33;
        }

        public function GetInfo()
        {
            return $this->name;
        }
        
        public function __destructor()
        {
            echo "This end of the class !";
        }

    }
?>