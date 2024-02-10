<!-- Prepared statement is required over this class/file as we are taking input from users in this class/file -->

<?php

include "dbh.class.php";

class InsertUsers extends Dbh{

    public function getSetUsersStmt1($id, $name){
        $sql = "INSERT INTO oop_php (id,name) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute([$id, $name])){
            echo 'Sucessfully new user added !';
        }
        else{
            echo 'Fail';
        }
    }

    // simple_form
    // public function getSetUsersStmt1($id, $name){
    //     $sql = "INSERT INTO oop_php (id,name) values(?, ?)";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$id, $name]);
    // }

}

?>