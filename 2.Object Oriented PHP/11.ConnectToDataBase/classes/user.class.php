<!-- return araay of asspciative_array -->

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