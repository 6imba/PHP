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

    <form action="4.LogIn.php" method="post">
        Email : <input type="email" placeholder="Email" name="email"><br>
        Password : <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" value="Log In" name="buttonlogin">
    </form>  
    <hr>
    <a href="2.Get_User_Detial.php">Get User</a><br>
    <a href="3.Create_User.php">Create Account</a>

</body>
</html>