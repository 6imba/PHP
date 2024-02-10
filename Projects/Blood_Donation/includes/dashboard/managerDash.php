<?php
session_start();
if (isset($_SESSION['role'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>

<body>
    <h1>Manager DashBoard</h1>
    <form action="../logout.php" method="POST">
        <input type="submit" value="Log Out" name="logout">
    </form>
</body>

</html>

<?php
}
else{
    echo "LogIn Your Role First !";
}
?>