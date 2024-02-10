<!-- return connection -->

<?php

class Dbh{
    private $host, $user, $password, $database;

    protected function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'php';

        $conn = new mysqli($this->host, $this->user, $this->password, $this->database); //OOP style programming to Open a new connection to the MySQL server
        //here mysqli() is inbuilt_function in OOP_php that allows you to access MySQL database servers.
        //XAMPP provides MySQL database (actually MariaDB) service.
        //The new keyword is used to create an object/instance of/from a class.
        return $conn;//$conn is an object gettype($conn) that holds the connection with database
    }
}

?>