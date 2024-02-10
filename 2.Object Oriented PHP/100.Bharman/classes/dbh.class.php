<!-- database connection using PDO IN OOP -->
<!-- task : connection to databsae  -->

<?php

class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "php";

    protected function connect(){
        $dsn = "mysql:host=".$this->host."; dbname=".$this->dbName;//data_source_name(descride type_of_data, type_of_host, database_name)
        $pdo = new PDO($dsn, $this->user, $this->password);//pdo_connection
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//optional : PDO error mode to exception
        return $pdo;
    }
}

?>

