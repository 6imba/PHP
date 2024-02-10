<!-- only class that interact with database -->
<!-- task : handles database interaction -->

<?php

class UsersModel extends Dbh{

    //get/fetch selective_user_derials
    protected function getUser($id){
        $sql = "SELECT * FROM oop_php WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $results = $stmt->fetchAll();
        return $results;
    }

    //set/insert a new user_derials
    protected function InsertUser($id, $name){
        $sql = "INSERT INTO oop_php (id,name) values(?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id, $name]);
    }

}

?>