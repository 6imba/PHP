<?php
include "includes/1.ClassAutoLoader.php";//ClassAutoLoader 
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
            echo $person1->showUser($_POST["email1"]);
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="email1">Enter User_Email : </label>
        <input type="email" name='email1'>
        <button type='submit' name='button1'>Get Detial</button>
    </form>
    <a href="3.index.php" >Home</a>

    
</body>
</html>