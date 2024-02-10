<?php
include "1.ClassAutoLoader.php";//ClassAutoLoader 
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
        echo $person1->CreateUser($_POST["id2"], $_POST["name2"]);
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="id2">Enter User_Id : </label>
        <input type="number" name='id2'><br>
        <label for="name2">Enter User_Name : </label>
        <input type="text" name='name2'><br>
        <button type='submit' name='button2'>Create User</button>
    </form>
    
</body>
</html>