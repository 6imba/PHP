<?php

class database{

    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASS;
    public $database = DB_NAME;
    public $conn;//hold connection
    private $statement;//statement after query to database 

    public function __construct(){
        try{
            return $this->conn = new PDO("mysql:host=".$this->host."; dbname=".$this->database, $this->user, $this->password);
        }catch(PDOException $e){
            echo "Database connection Error !";
        }
    }

    //perform curd operation
    public function query($sql, $params = []){
        if(empty($params)){
            $this->statement = $this->conn->prepare($sql);
            return $this->statement->execute($params);
        }
        else{
            $this->statement = $this->conn->prepare($sql);
            return $this->statement->execute($params);
        }
    }

    public function rowCount(){
        return $this->statement->rowCount();
    }

    public function fetchRecords(){
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetchRecord(){
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }
    
}

?>