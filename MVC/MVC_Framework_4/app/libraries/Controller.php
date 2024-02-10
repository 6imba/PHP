<?php

    //create Controller class
    //goal is that : so that  every class inside app/controllers folder like Pages extends to this Controller class indide contoller.php
    //because we need to Load the model and the view inside our contoller.php
    //create two methods inside this Controller_class, one to load Model and one to load View

    class Controller{

        //methods load Model
        public function model($model){
            //require_model_file
            require_once'../app/models/'.$model.'.php';
            //instanciate model
            return new $model();//instanciate User_class hold by arg $model //return object of user_class
        }//this is our core model file which will look for the right model
        
        //methods load View
        public function view($view, $data1 = []){
            if(file_exists('../app/views/'.$view.'.php')){
                require_once '../app/views/'.$view.'.php';
            }else{
                die("View doesnt exit !");
            }
        }

    }

?>