<!-- take care of flow of application -->
<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    } 

    public function login() {
        $data = [
            'title' => 'Login page'
        ];

        // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
        //     if(isset($_POST['submit'])){

        //     }
        // }

        $this->view('users/login', $data);
    }

    public function register() {
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
            'conformpassword' => ''
        ];
        $this->view('users/register', $data);
    }
} 