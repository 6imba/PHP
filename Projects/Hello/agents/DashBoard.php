<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="sidenav">
        <h2>SideBar</h2>

        <a href="#about" >Profile</a>
        <a href="donerlist.php">Doner List</a>
        <a href="addDoner.php">Add Doner</a>
        <a href="#services">Update Doner</a>
        <a href="#clients">Delete Doner</a>
        
        <form action="logOut.php" method="POST">
            <input type="submit" value="Log Out" name="logout">
        </form>
    </div>

    <div class="main">
        <h2 style="text-align:center">User Profile Card</h2>

        <div class="card">
            <img src="../img/agent/profile.jpg" alt="John" style="width:500px">
            <h1><?php $_SESSION['NAME'] ?></h1>
            <p class="title">CEO & Founder, Example</p>
            <p>Harvard University</p>
            <div style="margin: 24px 0;">
                <a href="#"><i class="fa fa-dribbble">FaceBook</i></a>
            </div>
        </div>

    </div>

</body>

</html>