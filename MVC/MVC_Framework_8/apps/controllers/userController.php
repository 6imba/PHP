<?php

class userController extends framework{

    public function index(){
        $this->view('Form');
    }

    //form
    public function signup(){
        echo "Form submitted";
    }
    
}

?>