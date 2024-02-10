<!-- task : fetches_database -->
<!--since UsersModel handles database interaction we need to extends UsersModel-->

<?php

class UsersView extends UsersModel{

    public function showUser($id){
        //pull all fetched_data_aray into $results (detial of matched id_user)
        $user_detial_row = $this->getUser($id);
        foreach($user_detial_row as $column){
            echo "Id : ".$column['id']." has Name : ".$column['name'].'<br>'.'<br>';
        } 
    }



}

?>