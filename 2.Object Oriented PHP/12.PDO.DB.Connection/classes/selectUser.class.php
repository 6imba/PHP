<!-- Prepared statement is required over this class/file as we are taking input from users in this class/file -->

<?php

include "dbh.class.php";

class SelectUser extends Dbh{
    
    public function getUsersStmt1($id, $name){
        $sql = "SELECT * FROM oop_php WHERE id = ? AND name = ?";//sql_code with placeholder which we are gonna fill it later
        $stmt = $this->connect()->prepare($sql); //prepare connection with sql statement without querying first //testing sql_code with empytty placeholder inside database first without any input
        $stmt->execute([$id, $name]); //later insert information inplace of black_placeholder in this way it prevent user to inject something(sql_code) into our database which makes us safer
        $rows = $stmt->fetchAll();//fetch all cloumn of row whose id match according to users input

        foreach($rows as $column){
            echo "Id : ".$column['id']." has Name : ".$column['name'].'<br>'.'<br>';
        } 
    }

    public function getUsersStmt2($id){
        $sql = "SELECT * FROM oop_php WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);  
        $stmt->execute([$id]); 
        $rows = $stmt->fetchAll();

        foreach($rows as $column){
            echo "Id : ".$column['id']." has Name : ".$column['name'].'<br>'.'<br>';
        } 
    }

    public function getUsersStmt3($id){
        $sql = "SELECT * FROM oop_php WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);  
        $stmt->execute([$id]); 
        $rows = $stmt->fetchAll();
        echo var_dump($rows)."<br>";//$rows holds a array from a array of associative array

        foreach($rows as $column){
            echo "Id : ".$column['id']." has Name : ".$column['name'].'<br>'.'<br>';
        } 
    }

}

?>