<?php include "init.php" ?>
<?php 
    if(!isset($_SESSION['id'])){ header("location:login.php");}//with out logging in you cannot enter into profile.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Profile</title>
 <link rel="stylesheet" href="assets/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>
    <div class="contain">
        <?php if(isset($_SESSION['login_success'])):?>
            <div class="success">
                <?php echo $_SESSION['login_success']; ?>
            </div>
        <?php endif ?>
        <?php unset($_SESSION['login_success']); ?>
        <h2>Welcome to DashBoard</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

