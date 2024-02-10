<?php
/*  
    class A//class
    {
        //property
        public $name='SimbA';
    }
    $a = new A;//object declaration outside class in same file
    echo $a->name;//calling property name of Class A by Object $a  of Class A
*/
?>


<!-- error -->
<?php
/*
    class A
    {
        public $name ='Resu';
        $a = new A;//we cannot declare object of a class inside the same class i.e class can only have property, constant and method not varible or else
        echo $a->name;
    }
*/
?>


<!-- error -->
<?php
//     class A//class
//     {
//         public $name='SimbA';//property
//     }
//     class B//class
//     {
//         $a = new A;//we cannot declear object $a of Class A inside Class B directly.
//         echo $a->name;
//     }
// ?>
<!-- Here, We can declear object of one class inside member funtion or method of another class but we cannot declear object of one Class A
 inside another Class B directly. this is because we can have only property or method inside class not object. so we can definde a method 
 and declare object inside ir -->

<!-- solution -->
<?php
    // class A//class
    // {
    //     //properties
    //     public $name='SimbA ! We can declare object of one class inside another class';
    // }
    // class B
    // {
    //     public function F()
    //     {
    //         $a =new A;//declear object $a of Class A inside method F() of  Class B
    //         echo $a->name;//printing/echoing the value hold by property name by object $a of Class A 
    //     }
    // }
    // $b=new B;//declear object $b of Class B outside Class B
    // $b->F();//calling method or member function Class B by object $b of Class B
?>

<?php
    // class A//class
    // {
    //     //properties
    //     public $name='SimbA ! We can declare object of one class inside another class';
    // }
    // class B
    // {
    //     public function F()
    //     {
    //         $a =new A;//declear object $a of Class A inside method F() of Class B
    //         return $a->name;//returning value hold by property name of Class A by object $a of Class A.
    //     }
    // }
    // $b=new B;//declear object $b of Class B outside Class B // object should always be declear outside class not inside class
    // echo $b->F();//calling method or member function F() Class B by object $b of Class B
?>

<!-- error -->
<?php
    // class A
    // {
    //     public $name='SimbA';
    // }
 
    
    // class B
    // {
    //     public function F()
    //     {
    //         echo $a->name; //here this $a is consider as variable of Class B not as Object of Class A
    //     }
    // }
    // $a = new A;
    // $b = new B;
    // $b->F();
?>

<!-- error -->
<?php
    // class A
    // {
    //     public $name='SimbA';
    // }
    
    // class B
    // {
    //     public function F()
    //     {
    //         echo $x; //here this $x is consider as variable inside method F() of Class B not external_variable or global_variable.
    //     }
    // }

    // $a = new A;
    // $x = $a->name;
    // $b = new B;
    // $b->F();
?>
<!-- solution 1 -->
<?php
    // class A
    // {
    //     public $name='SimbA';
    // }
    // class B
    // {
    //     public function F()
    //     {
    //         echo $GLOBALS['x']; //here this x is consider as variable inside method F() of Class B not external_variable or global_variable. So point currunt x as a global x/variable
    //     }
    // }

    // $a = new A;
    // $x = $a->name;
    // $b = new B;
    // $b->F();
?>
<!-- If we need to access varible of outside the class inside the class then we can use global variable to indicate that the varible that we
 are trying to access insde the method is the global varible outside the class/method -->
<!-- Therefore , we can call the Property $name of that Class A inside member function or method F() of another Class B by assigning the 
property(name) value into global varible ($x) and indicating local_variable(x) of another class B() as global_varible_($x) -->



<!-- error -->
<?php
    // class A
    // {
    //     public $name='SimbA';
    // }
    // class B
    // {
    //     public function F()
    //     {
    //         echo $GLOBALS['y']; // echo $GLOBALS['x']; calling global var
    //     }
    // }

    // $a = new A;
    // $x = $a->name; //global var
    // $b = new B;
    // $b->F();
?>


<!-- solution 2 -->
<?php
    // class A
    // {
    //     public $name='SimbA';
    // }
    
    // class B
    // {
    //     public function F($para)
    //     {
    //         echo $para; 
    //     }
    // }

    // $a = new A;
    // $x = $a->name;
    // $b = new B;
    // $b->F($x); //passing global_varible_($x) as parameter to method F() of class B()
?>


<!-- problem -->
<?php
    // function writeMsg() {
    // echo $x;
    // }

    // $x = 5;
    // writeMsg(); 
?>


<!-- soln : $GLOBALS -->
<?php
// function writeMsg() {
//   echo $GLOBALS['x'];
// }

// $x = 5;
// writeMsg(); 
?>