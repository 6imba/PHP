<?php

// //connection to database
// $db_host = 'localhost';
// $db_username = 'root';
// $db_password = '';
// $db_name = 'php';
// $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// if($conn){
//     echo "Connection established";
// }
// else{
//     echo "Connection not established";
// }

// // 1. insert_quesry into database
// $sql = "insert into tutorial (u_name, u_gender) values('Hira', 'Male');"; 
// $result = mysqli_query($conn, $sql); 
// if ($result) // check number of data/row in $result hold by $checkresult after query into database 
// {
//     echo "<br> Inserted Sucessfully !";
// }
// else 
// {
//     echo "<br> Error while insertion !";
// }

?>


<!-- 2. take input from user through form and echo out the input -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
   <form action="3.InsertIntoDB.php" method="post">
        <label for="nameid">Name : </label>
        <input type="text" id="nameid" name="name1"><br>
        <label for="genderid">Gender : </label>
        <input type="text" id="genderid" name="gender1"><br>
        <button type="submit" name="submitbtn">Submit</button>
   </form>

   <?php
    // if(isset($_POST["submitbtn"])){
    //     echo $_POST["name1"];
    //     echo $_POST["gender1"];
    // }
   ?>

</body>
</html> -->


<!-- 3. take input from user through form and insert_quesry into database -->

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
   <form method="post">
        <label for="nameid">Name : </label>
        <input type="text" id="nameid" name="name1"><br>
        <label for="genderid">Gender : </label>
        <input type="text" id="genderid" name="gender1"><br>
        <button type="submit" name="submitbtn">Submit</button>
   </form>

   <?php
    if(isset($_POST["submitbtn"])){
        $name = $_POST["name1"];
        $gender = $_POST["gender1"];
        $sql = "insert into tutorial (u_name, u_gender) values('$name' ,'$gender');"; 
        $result = mysqli_query($conn, $sql); 
        if ($result) // check number of data/row in $result hold by $checkresult after query into database 
        {
            echo "<br> Inserted Sucessfully !";
        }
        else 
        {
            echo "<br> Error while insertion !";
        }
    }
   ?>

</body>
</html>