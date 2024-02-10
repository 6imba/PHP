<!DOCTYPE html>
<html lang="en">
<head>
  <title>Static</title>
</head>
<body>
    <?php
    include "1.StaticClass.php";
        $object1 = new ClassA;//object

        $object1->SetInfo("Amir","21");// object_method
        echo "Namaste ! I am ".$object1->age." years old ".$object1->name."<br>"; // object_method
        //property of object name,age. here $ is not needed 
        
        echo ClassA::$sciencetificname; //static_property
        //static property $sciencetificname. $ is needed
        echo "<br>";

        ClassA::set_coded_date("6/11/2020");//static method set_coded_date()
        echo ClassA::$date; //static_property
        echo "<br>";

        $object1->OOPechoproperty(); // object_method
        echo "<br>";
        echo $object1->OOPreturnproperty(); // object_method
    ?>
</body>
</html>