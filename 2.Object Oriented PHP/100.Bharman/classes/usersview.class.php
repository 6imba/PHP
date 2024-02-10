<!-- task : fetches_database -->
<!--since UsersModel handles database interaction we need to extends UsersModel-->

<?php

class UsersView extends UsersModel{

    public function showUser($email1){
        //pull all fetched_data_aray into $results (detial of matched id_user)
        $user_detial_row = $this->getUser($email1);
        foreach($user_detial_row as $column){
            echo "Id(".$column['id'].") ==>  Name : ".$column['name'].", Email : ".$column['email'].", Status : '".$column['status']."'<br>".'<br>';
        } 
    }

    public function login($email, $password){
        //pull all fetched_data_aray into $results (detial of matched id_user)
        $user_detial_row = $this->login1($email, $password);
        
    }



}

?>