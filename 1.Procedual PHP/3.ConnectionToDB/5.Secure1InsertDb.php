<!--solution1 use mysqli funtion inside php ===> sql injection ==> mysqli_real_escape_string()  -->

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
        $name = mysqli_real_escape_string($conn, $_POST["name1"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender1"]);
        //mysqli_real_escape_string() : The mysqli_real_escape_string() function is an inbuilt function in PHP which is used to escape all special
        //characters for use in an SQL query. It is used before inserting a string in a database, as it removes any special characters that may 
        //interfere with the query operations.
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