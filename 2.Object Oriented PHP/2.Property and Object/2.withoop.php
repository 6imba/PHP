<!DOCTYPE html>
<html lang="en">
<head>
    <title>PropertyAndMethod</title>
</head>
<body>
    
    <?php
    include "2.withoopClass.php";

        $objperson1 = new Personality();//notice that we need parenthesis inorder to pass a parameters into method.You can also write code without parenthesis but it is compulsary when it come to constructor so make it a habit
        $objperson1->SetInfo('SimbA','21');
        echo $objperson1->name." IS ".$objperson1->age."<br>";

        $objperson2 = new Personality();
        $objperson2->SetInfo('Resu','29');
        echo $objperson2->name." IS ".$objperson2->age."<br>";

        $objperson3 = new Personality;
        $objperson3->SetInfo('Chong','15');
        echo $objperson3->name." IS ".$objperson3->age;

    ?>

</body>
</html>
<!-- OOP is uesd so that dont need to reapet same code again and again -->
<!-- therefore we can just instanciate an object instead of writing same code multiple times  -->
<!-- here we dont need to declare variable every time as we can just call an object from a classwhere variable is defined  -->
