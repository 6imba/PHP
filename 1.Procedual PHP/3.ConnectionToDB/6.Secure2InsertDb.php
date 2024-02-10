<!--solution1 use prepared statement ===>  -->

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

    // solution1 use prepared statement
    if(isset($_POST["submitbtn"])){
        $name = mysqli_real_escape_string($conn, $_POST["name1"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender1"]);
        //create a template
        $sql = "insert into tutorial (u_name, u_gender) values(? ,?);"; //1 we have sql statement
        //create/initialize prepared statement 
        $stmt = mysqli_stmt_init($conn); //2 initialize prepared statement
        //prepare the prepapre statement : mysqli_stmt_prepapre($stmt, $sql)
        if(!mysqli_stmt_prepare($stmt, $sql)){ // 3 we run it inside DB
            echo "SQL statement fail";
        }
        else{
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "ss", $name , $gender); // 4 after it is passed inside DB then we include acutal data into the place holder(?)
            // run parameters inside database
            mysqli_stmt_execute($stmt);
        }
        
    }
   ?>

</body>
</html>