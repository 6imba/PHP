<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        include "1.ClassOfPublicAccessModifier.php";//include statement, includs another_file(1.ClassOfPublicAccessModifier.php) in current file(1.Private)
        $objone = new Oneclass;//object
        echo $objone->apple;
    ?>
</body>
</html>