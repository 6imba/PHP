<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
    include "1.Contructor.class.php";
    $object1 = new Person("SimbA",21,"Nepal");//here parenthesis()/ bracket is compulsary when we have constructor because we need to pass in data for constructor property that we are setting 
    echo $object1->name;
    echo $object1->age."<br>";//code1

    $object1 = new Person("laki",2,"Nikll");//here parenthesis()/ bracket is compulsary when we have constructor because we need to pass in data for constructor property that we are setting 
    echo $object1->name;
    echo $object1->age."<br>";//code4

    $object1->SetInfo("AmiR",27,"huwa");
    echo $object1->name;
    echo $object1->country."<br>";//code2

    $object1->SetInfo("Resu",25,"Takwa");
    echo $object1->name;
    echo $object1->country."<br>";//code3

    //this is how we can use constructor in order to assign different property when we actually create an object based of this class here

    echo "<br>".$object1->GetInfo();//code5
?>
    
</body>
</html>

<!-- 
here what is difference between __construct() and SetInfo()???
or what is difference between constructor and normal funtion ???
ans : constructor is called at the time when object is initialized where in case of normal function we first create object and then call normal_funtion 
-->
