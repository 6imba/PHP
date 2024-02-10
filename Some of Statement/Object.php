<?php

    class A{
        public function __construct(){
            echo 'A';
        }
    }

    class B{
        protected $ball ='A';

        public function __construct(){
            echo 'B';
            $objA = new A;
            echo '<br>';
            var_dump($this->ball);
            echo '<br>';
            $this->ball = new $this->ball;
            echo '<br>';
            var_dump($this->ball);

        }
    }

    $objB = new B();
    echo '<br>';
    var_dump($objB);



?>