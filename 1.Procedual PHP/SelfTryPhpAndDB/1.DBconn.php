<?php
    $dbserver  = "localhost";
    $dbuser    = "root";
    $dbpass    = "";
    $dbname    = "php";

    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die();

    echo "Hello world I am database connecting file!"
?>