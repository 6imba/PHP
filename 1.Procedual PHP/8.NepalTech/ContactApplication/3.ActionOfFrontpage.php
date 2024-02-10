
<!-- Data transfers from "2.FrontPage.php" to this page "3.ActionOfFrontpage.php" -->
<!-- When we click in save botton of 2.FrontPage.php page this page is responsible for saving data from 2.FrontPage.php page to database
 && also inclued 1.DatabaseConnection.php file as connection is takes place here -->

<?php
    $name = $_POST['name']; //insde POST['index'], index is name of given tag
    $phone = $_POST['phone'];
    echo "Name is ".$name." and PhoneNo. is ".$phone;//this line wont get printed as after saving  header function takes instant file to corresponding location if block header function then u can cheak it ..

    include '1.DatabaseConnection.php';//include database connecting file(1.DatabaseConnection.php) of this application
    $sql = "INSERT INTO contactperssonal(name,phone)VALUES('$name','$phone')";//sql query to insert data into the column of table of database
    $result = mysqli_query($conn,$sql);//as $sql holds the query, this mysqli_query takes it (query of $sql) to $conn which is placed in $result variable finally

    if ($result)
     {
        header('Location:2.FrontPage.php?Success');//u open any file from ContactApplication u will go to front 2.FrontPage.php page because of htis code...
     }
 //upto this code will save the inputed data to database 
//the number of times we load this file directly for same number of time it will save null data into database.....
?>

