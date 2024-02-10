<?php

class Database{

    private $dbHost = DB_HOST;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;
    private $dbName = DB_NAME;

    private $statement;//statement after query to database 
    private $dbHandler;//hold connection
    private $errorHandler;

    public function __construct(){
        $this->dbHandler = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        // print_r($this->dbHandler);
    }
    //constructor will automatically run our connection whenever Database_class is instanciate

    //Allows us to write queries
    public function query($sql){
        $this->statement = $this->dbHandler->query($sql);
    }

    //Return an array
    public function resultSet(){
        $final_data = [];
        while($result = $this->statement->fetch_assoc()){
            array_push($final_data, $result);
        }
        return $final_data;
    }
}

?>