<?php

class Oneclass
{
    private $Priveteproperty = "Hello World I am Private !";
    //here property(Priveteproperty) is private so we can access it(property) inside same class only the class.
    //we cannot call (Priveteproperty)from another_file, another_class.
    //we can only access property or method inside the class when they(property or method) are public 
    //we privatize the (property and method) for security purpose...
    //this can be solved if we declare the property or method as public i.e {public $Oneproperty = "Hello World I am Private !";} 
    //but this wont help in security purpose
    //so we can use below solution
    public function Onemethod()//create pblic method(Onemethod()) that can access private property of the same class.
    {
        $variable = $this->Priveteproperty;
        //here, $this is a reserved keyword in PHP that refers to the calling object ==> points to present/current instant/object of class (i.e $Oneobject) 
        //and access private property (i.e. $Priveteproperty) within this class(Oneclass) as we know we can accsess private property or method within the current class only
        //and store property value into $variable
        return $variable;
    }//as this method (i.e Onemethod) is public we can access it from any where another_file,another_class
}
//ok now here we can access the public_method (i.e Onemethod) from another_file (i.e 2.Private.php) and this public_method (i.e Onemethod) can access the  private_property (i.e. $Priveteproperty) of this class(Oneclass)
//as we know we can accsess private(property_or_method) within the current class only what if we need to make private(property_or_method) accessible for some of selective classes too. 
//here comes the use of protected_property, protected_access_modifier,inheritance


//The "private" access specifier is meant to be available within the class where it is defined only, 
//you cannot call it from outside the class, not even from a child class. 
//You can maybe use the "protected" access specifier instead which will be available to the child classes as well but not the other classes. 
?>

<!-- 
PHP - Inheritance and the Protected_Access_Modifier
In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class.
What does that mean?
Let's look at an another protected file: 
-->
