<!DOCTYPE html>
<html lang="en">
<head>
    <title>Protected</title>
</head>
<body>
    <?php
        include "3.ClassOfProtectedAccessModifier.php";
        $Twoobj = new Twoclass;//object
        echo $Twoobj->Twomethod();
        $Oneobj = new Oneclass;
        echo $Oneobj->OneProperty;
        //line 11 and 12 will shoew error as we access protected_access_modifier within the class where it is defined and derieved/extends class only not from out side the class in
    ?>
</body>
</html>
