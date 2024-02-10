<?php

class framework {

    public function view($viewName, $userData=[]){
        if(file_exists("../apps/views/$viewName.php")){
            require_once "../apps/views/$viewName.php";
        }
        else{
            echo "View not found";
        }
    }

    public function model($modelName){
        if(file_exists("../apps/models/$modelName.php")){
            require_once "../apps/models/$modelName.php";
            return new $modelName;
        }
        else{
            echo "Model not found";
        }
    }
}

?>