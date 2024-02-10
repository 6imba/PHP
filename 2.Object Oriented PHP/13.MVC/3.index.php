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

    <form action="" method="POST">
        <h3>Enter 1 to Get_User_Detial and 2 to Create_User : </h3>
        <input type="number" name='action1'>
        <button type='submit' name='button'>Enter</button>
    </form>
    <?php
        if(isset($_POST["button"]))
        {
            
            if($_POST["action1"] == 1)
            {
                header('Location:includes/2.Get_User_Detial.php');
            }
            
            if($_POST["action1"] == 2)
            {
                header('Location:includes/3.Create_User.php');
            }
            
        }
        ?>

</body>
</html>