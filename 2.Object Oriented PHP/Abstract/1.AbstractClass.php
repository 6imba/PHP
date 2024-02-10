<?php

    abstract class ParentAbstractClass {
        abstract public function yoKaamGarnaiPerxa1();
        abstract public function yoKaamGarnaiPerxa2($name);
        abstract public function yoKaamGarnaiPerxa3() : string;
    }

    class ChildClass extends ParentAbstractClass {
        public function yoKaamGarnaiPerxa1() {
          return "Kaam_1 gare maile";
        }
        public function yoKaamGarnaiPerxa2($name) {
            return "Kaam_2 gare maile {$name}";

        }
        public function yoKaamGarnaiPerxa3(): string {
            return "Kaam_3";
        }  
    }

    // $obj1 = new ParentAbstractClass();
    // var_dump($obj1)
    // we cannot creat object of abstract class.

    $obj2 = new ChildClass();
    var_dump($obj2);
    $val1 = $obj2->yoKaamGarnaiPerxa1();
    echo("</br>");
    echo($val1);
    $val2 = $obj2->yoKaamGarnaiPerxa2("Apple");
    echo("</br>");
    echo($val2);
    $val3 = $obj2->yoKaamGarnaiPerxa3();
    echo("</br>");
    echo($val3);
?>