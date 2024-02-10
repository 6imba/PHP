<!DOCTYPE html>
<html lang="en">
<head>
    <title>Private</title>
</head>
<body>
    <?php
        include "2.ClassOfPrivateAccessModifier.php";//include
        $Oneobject = new Oneclass;
        echo $Oneobject -> Priveteproperty;//here we cant acces $Priveteproperty so we can solve it by calling private property using public method in same call where private property lies
        // echo $Oneobject -> Onemethod();//public property
    ?>
</body>
</html>