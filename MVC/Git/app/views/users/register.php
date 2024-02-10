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
    <h2>Register</h2>
    <form action="<?php echo URLROOT; ?>/users/register" method ="POST">
        <input type="text" placeholder="Username *" name="username" required>
        <input type="password" placeholder="Password *" name="password" required>
        <input type="password" placeholder="ConformPassword *" name="ConformPassword" required>
        <button id="submit" type="submit" value="submit">Register</button>
    </form>
