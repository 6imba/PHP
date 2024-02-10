<?php

require APPROOT."/views/includes/head.php";
require APPROOT . '/views/includes/nav.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Lon In</h2>
    <form action="<?php echo URLROOT; ?>/Users/login" method ="POST">
        <input type="text" placeholder="Username *" name="username" required>
        <input type="password" placeholder="Password *" name="password" required>
        <button id="submit" type="submit" value="submit">Submit</button>
        <p>Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
    </form>
