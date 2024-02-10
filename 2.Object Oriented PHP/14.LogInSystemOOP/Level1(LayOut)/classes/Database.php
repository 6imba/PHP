<?php 

class Database {

   private $host = "localhost";
   private $username = "root";
   private $database = "php";
   private $password = "";
   protected $conn;

   public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->username, $this->password);
            echo "Connection Successfully";

        } catch(PDOException $e){
            echo "Connection Problem: ". $e->getMessage();

        }
   }

}

 ?>