<?php  

    class Pages extends Controller{

        public function __construct(){
            $this->userModel = $this->model('User');//1. here userModel is property of Controller class //2. defining userModel property by call public_model()_function in Controller_class 
            //here $this->userModel holds the  object of User_class
        }
        
        public function index(){
            $this->view('pages/index');
        }

        public function about(){
            $this->view('pages/about');
        }

        public function contact(){
            $users = $this->userModel->getUsers();
            echo  '<br>';
            echo  '<br>';
            print_r($users);
            echo  '<br>';
            echo  '<br>';
            $this->view('pages/contact', $users);//call view
        }


    }
?>