<!DOCTYPE html>
<html lang="en">
<head>
    <title>ObjCall</title>
</head>
<body>
    <?php
    include "2.ClassContainer.php";//without include funtion we cannot access class from another file
        
    $objtwo = new Twoclass();//create object
    var_dump($objtwo);
    echo "<br>".$objtwo -> info;//here info is property of class named Twoclass in file named 2.ClassContainer.php note that info is propety not varaible as it is written as $info and we dont write $ sign when we call the property linke info instead of $info...  i.e we use $ symbol to define the property when we creat them but dont use it when we want to reference them.....
    echo "<br>".$objtwo -> name;
    echo "<br>".$objtwo -> data1;
    echo "<br>".$objtwo -> data2;
?>
</body>
</html>