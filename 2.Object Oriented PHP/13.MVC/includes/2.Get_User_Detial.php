<?php
include "1.ClassAutoLoader.php";//ClassAutoLoader 

echo "Get_User";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get_User</title>
</head>
<body>

<?php
    if(isset($_POST["button1"]))
        {
            $person1 = new UsersView();
            echo $person1->showUser($_POST["id1"]);
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="id1">Enter User_Id : </label>
        <input type="number" name='id1'>
        <button type='submit' name='button1'>Get Detial</button>
    </form>
    
</body>
</html>