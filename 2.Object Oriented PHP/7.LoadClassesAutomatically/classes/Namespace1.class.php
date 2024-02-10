<?php

    namespace Namespace1;

    class Namespace1{
        public $name;

        public function __construct($arg1){
            $this->name=$arg1;
        }

        public function getPerson(){
                return $this->name;
        }
    }
?>