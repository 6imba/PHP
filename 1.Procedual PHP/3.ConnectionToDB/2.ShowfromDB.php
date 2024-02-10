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

// select_quesry into database
$sql = "select * from tutorial;"; //sql //why is it not taking first row of the table
$result = mysqli_query($conn, $sql); // query(sent and run into datbase)
var_dump($result);
$checkresult = mysqli_num_rows($result); // number of  data/row hold by $result after query
if ($checkresult > 0) // check number of data/row in $result hold by $checkresult after query into database 
{
    echo "<br> Data : ".$checkresult;
    $row = mysqli_fetch_assoc($result); // fetch data($result) from database and assign all data in $row. Note : fetching data stores data in array form
    echo "<br> ".gettype($row)." Size : ".sizeof($row); // see dataype of $row and size of that datatype
    
    while($row = mysqli_fetch_assoc($result)) //while will loop until the condition is false, or more accurately, is == false. Since, in PHP, null == false, the loop will continue until there are no more rows in the result returned from the MySQL database, as the function returns null when there are no more rows.
    {
        echo "<br>".$row["u_id"]." is ".$row['u_name'];
    }
}
else 
{
    echo "No Data";
}


?>