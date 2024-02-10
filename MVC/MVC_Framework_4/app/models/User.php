<?php

class User{
    private $db;//object of Database()
    
    public function __construct(){
        $this->db=new Database;//instanciate Database_class // which establish database connection
    }

    public function getUsers(){
        $this->db->query("SELECT * FROM mvc");
        $result = $this->db->resultSet();
        return $result;
    }
}

?>