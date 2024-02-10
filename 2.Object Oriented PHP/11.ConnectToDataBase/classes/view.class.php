<?php

include 'user.class.php';

class View extends User{

    public function showAllUser(){
        $detials = $this->getAllUser();
        foreach($detials as $res){
            echo 'Id : '.$res['id'].'       Name : '.$res['name'].'<br>';
        }
    }
}
?>