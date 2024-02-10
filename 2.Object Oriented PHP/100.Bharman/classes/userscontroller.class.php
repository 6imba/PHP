   <!-- class that update(insert, upadte, create, etc) something inside database -->
<!-- task : update_database -->
<!--since UsersModel handles database interaction we need to extends UsersModel-->


<?php

class UsersController extends UsersModel{

    public function CreateUser($name, $email, $password){
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);//encrypt password
        if($this->InsertUser($name, $email, $hashpassword)){
            return 'Successfully Created Account !';
        }
        else{
            return 'Failed To Create Account!';
        }
    }

}

?> 