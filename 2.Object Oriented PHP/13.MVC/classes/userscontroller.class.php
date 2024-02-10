   <!-- class that update(insert, upadte, create, etc) something inside database -->
<!-- task : update_database -->
<!--since UsersModel handles database interaction we need to extends UsersModel-->


<?php

class UsersController extends UsersModel{

    public function CreateUser($id, $name){
        $this->InsertUser($id, $name);
    }

}

?> 