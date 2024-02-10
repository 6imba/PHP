<?php

class userController extends framework{
    public function index(){
        echo "userController";
    }
    // public function userMethod($firstparams, $secondparams){//params
    //     echo "userMethod";
    //     echo $firstparams;
    //     echo $secondparams;
    // }

    public function userMethod1(){//params
        $userData = array("name"=>"SimbA", "country"=>"Nepal");
        $this->view("userView",$userData);
    }

    //insertion
    // public function userMethod2(){//params
    //     $modelName = $this->model('userModel');
    //     if($modelName->userModelMethod1()){
    //         echo "User has been inserted successfully !";
    //     }
    //     else{
    //         echo "Inserttion Failed !";
    //     }
    // }

    // //selection
    // public function userMethod2(){//params
    //     $modelName = $this->model('userModel');
    //     echo 'Total number of user_data row : '.$modelName->userModelMethod1();
    // }

    // //fetchRecords
    // public function userMethod2(){//params
    //     $modelName = $this->model('userModel');
    //     echo 'Users Record : ';
    //     $result = $modelName->userModelMethod1();
    //     $this->view('userView', $result);
    // }

    //fetchRecord
    public function userMethod2(){//params
        $modelName = $this->model('userModel');
        echo 'Users Record : ';
        $result = $modelName->userModelMethod1();
        $this->view('userView', $result);
    }
    

    

}

?>