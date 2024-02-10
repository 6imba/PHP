<?php

class userModel extends database{

    public function userModelMethod1(){

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