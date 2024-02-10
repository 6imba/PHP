<!-- database connection using PDO IN OOP -->
<!-- NO prepared statement is required over this class/file as we are not taking any input from users in this class/file -->

<?php

include "dbh.class.php";

class Select extends Dbh{
    
    public function getUsers1(){
        $sql = "SELECT * FROM oop_php";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){//till the database table fetches exiting rows
            echo $row['id'].'<br>';
            echo $row['name'].'<br>';
            echo "Id : ".$row['id']." has Name : ".$row['name'].'<br>'.'<br>';
        }
    }

    public function getUsers2(){
        $sql = "SELECT * FROM oop_php";
        $stmt = $this->connect()->query($sql);
        
        $rows = $stmt->fetch();//fetch a row
        echo gettype($rows);
        echo count($rows);
    }

    public function getUsers3(){
        $sql = "SELECT * FROM oop_php";
        $stmt = $this->connect()->query($sql);
        
        $rows = $stmt->fetchAll();//all rows of table
        echo var_dump($rows)."<br>";//$rows holds a array of associative array
        echo gettype($rows);
        echo count($rows);
    }
    
}

?>