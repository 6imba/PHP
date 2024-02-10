<?php
include "includes/1.ClassAutoLoader.php";//ClassAutoLoader 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>MVC</title>
</head>
<body>

    <?php
        $person1 = new UsersView();
        echo $person1->showUser(1);

        $person1 = new UsersController();
        echo $person1->CreateUser(12,'Sabda');
    ?>

</body>
</html>