<?php

// $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
//after connection to database

// quesry into database
$sql = "select * from tutorial;"; 
$result = mysqli_query($conn, $sql); // query(sent and run into datbase)
// $row = mysqli_fetch_assoc($result); // fetch data($result) from database and assign all data in $row. Note : fetching data stores data in array form
while($row = mysqli_fetch_assoc($result)) //while will loop until the condition is false, or more accurately, is == false. Since, in PHP, null == false, the loop will continue until there are no more rows in the result returned from the MySQL database, as the function returns null when there are no more rows.
    {
        echo "<br>".$row["u_id"]." is ".$row['u_name'];
    }


?>




<?php
// quesry into database
$sql = "select * from tutorial;"; //sql //why is it not taking first row of the table
$result = mysqli_query($conn, $sql); // query(sent and run into datbase)
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


<?php

    $sql = "SELECT Uid From logintable WHERE UidName=?";//select id of the given name
    $statement = mysqli_stmt_init($conn);//create prepare statement
    mysqli_stmt_prepare($statement,$sql);
    mysqli_stmt_bind_param($statement,"s",$name);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);//store the result in $statement
    $resultCheck = mysqli_stmt_num_rows($statement);//count the numbers of row of result that $statement varible holds OR of rows where UidName='$name'.If there is any similar name present in table of DB then it will count 1 as 1>0 error occur...as there shouldnt be any similar username..

?>

<?php
    
    $sql="INSERT INTO logintable (UidName,UidEmail,UidPassword) VALUES (?,?,?)";
    $statement = mysqli_stmt_init($conn);//again initialize new connection because sql quereey of above prepare statement and this prepare statement  are different...
    mysqli_stmt_prepare($statement,$sql);
    $hashpassword = password_hash($password,PASSWORD_DEFAULT);//encrypt password
    mysqli_stmt_bind_param($statement,"sss",$name,$mail,$hashpassword);//mistakely i wrote $email instead of $mail here ..due to which there were no any error but also inputed value were also not saved in db
    mysqli_stmt_execute($statement);

?>


<?php
    $sql="UPDATE selftable SET name='$name',contact='$contact' where id=$id;";
    $result=mysqli_query($conn,$sql);
?>

<?php
     $sql = "DELETE FROM selftable where id = $ID";
     $result=mysqli_query($conn,$sql);
?>


<!--OOP return araay of asspciative_array -->

<?php
include 'dbh.class.php';
class User extends Dbh{
    protected function getAllUser(){
        $sql = "SELECT * FROM oop_php";
        $result = $this->connect()->query($sql); //result is object
        $numbRows = $result->num_rows; //numb_rows acts on object only
        if ($numbRows > 0){
            while($row = $result->fetch_assoc()){ //fetch_assoc() acts on object only && &row is array //while will loop until the condition is false, or more accurately, is == false. Since, in PHP, null == false, the loop will continue until there are no more rows in the result returned from the MySQL database, as the function returns null when there are no more rows.
                $data[] = $row;
            }
            return $data;
        }
    }
}
?>


<!-- only class that interact with database -->
<!-- task : handles database interaction -->
<?php
class UsersModel extends Dbh{
    //get/fetch selective_user_derials
    protected function getUser($id){
        $sql = "SELECT * FROM oop_php WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetchAll();
        return $results;
    }
    //set/insert a new user_derials
    protected function InsertUser($id, $name){
        $sql = "INSERT INTO oop_php (id,name) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name]);
    }

}
?>