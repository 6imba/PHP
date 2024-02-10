<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
    include "3.Destructor.Class.php";
    $object1 = new Person("SimbA",21,"Nepal");//here parenthesis()/ bracket is compulsary when we have constructor because we need to pass in data for constructor property that we are setting 
    // unset($object1);//try destructor
    echo $object1->GetInfo();//code5
    //unset($object1);//try destructor
?>
    
</body>
</html>