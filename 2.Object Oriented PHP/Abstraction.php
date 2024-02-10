<?php

abstract class A{
    public $a='I am property of parent abstract class !';

    public function fun1(){
        echo 'I am normal function of abstract class';
    }

    abstract public function fun2(); //declare abstract_class
}
class B extends A{
    public function fun2(){//define abstract_class
        echo 'I am abstract function of abstract class';
    }
}

$obj = new B();
$obj->fun2();//call abstract_class

?>


<!-- 
it doesnt supports multiple inheritance
if a class contain abstract method/property then that particular class should be declared as abstract
we can only declear abstract_method/property not define insdie abstract class and define abstract_method/property inside derieved/child class
we cannot instanciate an object of abstract class. So, we use/call abstract_method/property using object of derieved/child class
a abstract calss may or may not have abstract_method
we cannot declare constructor and static method as abstract

An abstract class is a class that has at least one abstract method. Abstract methods can only have names and arguments, and no other code. 
Thus, we cannot create objects out of abstract classes. Instead, we need to create child classes that add the code into the bodies of the methods,
 and use these child classes to create objects.
 once we declear abstract_function inside abstract_class we need to deinfe it inside child_class_class who inherit the abstract_class or 
 if not define abstract_function then should deinfe child_class_class as abstract too,
 or else it will show error:
Class B contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (A::fun2) 
we can define abstract_function blank inside child_class or function with no any data member/empty but should have one function with same name as abstract_method
i.e : 
public function fun2(){//define abstract_class
        //blank
    }
}


Therefore, We use abstract classes when we want to commit the programmer (either oneself or someone else) to write a certain class method,
but we are only sure about the name of the method, and not the details of how it should be written. 

To take an example, circles, rectangles, octagons, etc. may all look different, but are all 2D shapes nonetheless, and thus all possess the traits 
and circumference. So, it makes perfect sense to group the code that they have in common into one parent class. In this parent class, we would 
have the two properties of area and circumference, and we might even consider adding a method that calculates the area (which might be problematic
since different shapes require different calculations). In these kinds of cases, when we need to commit the child classes to certain methods that
they inherit from the parent class but we cannot commit about the code that should be used in the methods, we use abstract classes.



Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in
 the code.

An abstract class or method is defined with the abstract keyword:


When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

So, when a child class is inherited from an abstract class, we have the following rules:

The child class method must be defined with the same name and it redeclares the parent abstract method
The child class method must be defined with the same or a less restricted access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition


Abstract Class allow child classes to complete missing behaviour.

I write/mention something(abstract_method) inside my class(abstract_class) so that who ever inherits my class(abstract_class) should compulsarily implement it(that something(abstract_method)) inside theirs class(child_class) on which they are working
e.g : if we need to login somewhere then you should compalsaryly provide information, here abstraction concept comes in use
-->
