<?php
//connection to database
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'php';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(isset($_POST["submitbtn"])){
    $name = $_POST["name1"];
    $gender = $_POST["gender1"];
    $sql = "insert into tutorial (u_name, u_gender) values('$name' ,'$gender');"; 
    mysqli_query($conn, $sql); 
    header("Location: ../4.InsertIntoDB.php?inserted=success"); //header function takes us to another file
}
   ?>