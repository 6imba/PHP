<?php
include "includes/1.ClassAutoLoader.php";//ClassAutoLoader 
echo "Create_User";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create_User</title>
</head>
<body>

<?php
    if(isset($_POST["button2"]))
    { 
        $person1 = new UsersController();
        echo $person1->CreateUser($_POST["name1"], $_POST["email1"], $_POST["password1"]);
        echo '<br><a href="3.index.php" >Click me</a>';

    }
    else{
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="name1">Enter User_Name : </label>
            <input type="text" name='name1'><br>
            <label for="email1">Enter User_Email : </label>
            <input type="email" name='email1'><br>
            <label for="password1">Enter User_Password : </label>
            <input type="password" name='password1'><br>
            <button type='submit' name='button2'>Create User</button>
        </form>
        <a href="3.index.php" >Home</a>

    <?php
    }
    ?>
    
</body>
</html>