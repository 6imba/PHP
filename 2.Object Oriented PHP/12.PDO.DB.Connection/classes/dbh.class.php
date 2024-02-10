<!-- database connection using PDO IN OOP -->

<?php

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "php";

    protected function connect(){
        $dsn = "mysql:host=".$this->host."; dbname=".$this->dbName;//data_source_name(descride type_of_data, type_of_host, database_name) // define driver
        $pdo = new PDO($dsn, $this->user, $this->password);//pdo_connection
        
        //$conn = new PDO("mysql:host=localhost; dbname=php", "root", "");
        //$conn = new PDO("sqlserver:host=localhost; dbname=php", "root", "");
        //$conn = new PDO("oracle:host=localhost; dbname=php", "root", "");

        //$conn = new PDO("data_source_name/driver(host & database_name)", "user", "password");;
        //here 
        // 1. PDO() is standard predefined class in php 
        // 3. $conn is object instanciated of the PDO() class
        // 2. new is keyword

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//optional : PDO error mode to exception
        return $pdo;
    }
}

?>