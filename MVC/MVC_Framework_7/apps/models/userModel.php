<?php

class userModel extends database{

    public function userModelMethod1(){

        //insertion
        // $name = 'Reshu';
        // $email = "Race25@gmail.com";
        // $password = 123123;
        // $sql = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
        // $params = [$name,$email,$password];
        // if($this->query($sql,$params)){
        //     return true;
        // }
        // else{
        //     return false;
        // }

        // //selection
        // $sql = "SELECT * FROM users";
        // if($this->query($sql)){
        //     return $this->rowCount();
        // }
        // else{
        //     return false;
        // }

        // //fetchRecords
        // $sql = "SELECT * FROM users";
        // if($this->query($sql)){
        //     return $this->fetchRecords();
        // }
        // else{
        //     return false;
        // }

        //fetchSingleRecord
        $sql = "SELECT * FROM users where id = ?";
        $params = [4];
        if($this->query($sql, $params)){
            return $this->fetchRecord();
        }
        else{
            return false;
        }
    }

}

?>
<!-- actually model willl be class -->