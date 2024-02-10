<!-- takes input from users -->

<?php
include "includes/1.ClassAutoLoader.php";//ClassAutoLoader 
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>MVC Input</title>
</head>
<body>


    <?php

    if(isset($_POST["button"]))
    {
        if($_POST["action1"] == 1){
    ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="id1">Enter User_Id : </label>
                <input type="number" name='id1'>
                <button type='submit' name='button1'>Get Detial</button>
            </form>

    <?php
        }

        if($_POST["action1"] == 2){
    ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label for="id2">Enter User_Id : </label>
                <input type="number" name='id2'><br>
                <label for="name2">Enter User_Name : </label>
                <input type="text" name='name2'><br>
                <button type='submit' name='button2'>Create User</button>
            </form>
    <?php
        }
    }
    ?>


    <?php

        if(!isset($_POST["button"]))
        {
    ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <h3>Enter 1 to Get_User_Detial and 2 to Create_User : </h3>
                <input type="number" name='action1'>
                <button type='submit' name='button'>Enter</button>
            </form>
    <?php
        }
    ?>


    <?php

        if(isset($_POST["button1"]))
        {
            $person1 = new UsersView();
            echo $person1->showUser($_POST["id1"]);
        }

        if(isset($_POST["button2"]))
        { 
            $person1 = new UsersController();
            echo $person1->CreateUser($_POST["id2"], $_POST["name2"]);
        }
    ?>

</body>
</html>