<!-- DOC-1 -->
<?php
    // class A
    // {
    //     public $name='Hari';
    // }
?>

<!-- DOC-2 -->
<?php
    // class A
    // {
    //     public $name = 'Lakhana';
    // }
    // $a = new A;
?>


<!-- DOC-3 -->
<?php
    // class A
    // {
    //     public $name = 'Guras';
    // }
    // $a = new A;
    // $x = $a->name;//storeing value of property name in variable $x
?>


<!-- DOC-4 -->
<?php
    // class A
    // {
    //     public $name;
    // }
    // class B//class
    // {
    //     public function F($data)
    //     {    
    //         $a = new A;
    //         $a->name=$data;
    //         echo $a->name;
    //     }
    // }
?>



<!-- DOC-4 how can i define property of class from outside the class -->
<?php
    // class A
    // {
    //     public $name;
    // }
    // class B//class
    // {
    //     public function F($data)
    //     { 
    //         echo $data;
    //     }
    // }

    // $a = new A();
    // $a->name = "Amir";
    // $b = new B();
    // $b->F($a);
?>

<!-- not valid -->
<?php
    // class A
    //     {
    //         public $name="aaaaa";
    //     }
    // class B//class
    //     {
    //         public function F($data)
    //         {    
    //             $a = new A;
    //             $a->name=$data;
    //             echo $a->name;
    //         }
    //     }
    // $b = new B();
    // $b->F();
?>
