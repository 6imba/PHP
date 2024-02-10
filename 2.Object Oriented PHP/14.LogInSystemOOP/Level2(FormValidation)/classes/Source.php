<?php 
class Source extends Database {

    public $statement;
    
    // Query method accept all database queries
    public function Query($query, $param = []){
        if(empty($param)){
            // if we dont have the parameters
            $this->statement = $this->conn->prepare($query);
            return $this->statement->execute();
        } 
        else {
            // if we have some parameters
            $this->statement = $this->conn->prepare($query);
            return $this->statement->execute($param);
        }
    }

    //Count the number of rows
    public function CountRows(){
        return $this->statement->rowCount();
    }

    //Fetch all records from specific table
    public function FetchAll(){
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //fetch single row from specific table
    public function Single(){
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

}


 ?>