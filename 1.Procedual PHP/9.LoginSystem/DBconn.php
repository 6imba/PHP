<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "php";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Connection Failed : ".mysqli_connect_error());
?>