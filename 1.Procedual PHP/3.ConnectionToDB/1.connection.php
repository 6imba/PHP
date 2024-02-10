<?php
//connection to database
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'php';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if($conn){
    echo "Connection established";
}
else{
    echo "Connection not established";
}
// $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name)  or die();

?>