<!-- Prepared statement is required over this class/file as we are taking input from users in this class/file -->

<?php

include "dbh.class.php";

class Test extends Dbh{

    //get all_user_derials
    public function getUsers(){
        $sql = "SELECT * FROM oop_php";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo $row['id'].'<br>';
            echo $row['name'].'<br>';
            echo "Id : ".$row['id']." has Name : ".$row['name'].'<br>'.'<br>';
        }
    }


    //get/fetch selective_user_derials
    public function getUsersStmt1($id, $name){
        $sql = "SELECT * FROM oop_php WHERE id = ? AND name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name]); 
        $rows = $stmt->fetchAll();

        foreach($rows as $column){
            echo "Id : ".$column['id']." has Name : ".$column['name'].'<br>'.'<br>';
        } 
    }


     //set/insert a new user_derials
    public function getSetUsersStmt1($id, $name){
        $sql = "INSERT INTO oop_php (id,name) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name]);
    }
    

}



?>