<?php

class route{
    public $controller = "userController";
    public $method = "userMethod2";
    public $params = [];

    public function __construct()
    {
        //check url
        $url = $this->url();
        if(!empty($url)){
            //check controller
            if(file_exists("../apps/controllers/".$url[0].".php")){
                $this->controller = $url[0];
                unset($url[0]); //we already assign controller into $this->controller so need of $url[0] anymore. Therefore unset it.
            }
            else{
                echo "Controller Not Found !";
            }
        }

        require_once "../apps/controllers/".$this->controller.".php"; // here $this->controller is string(7) "welcome"
        $this->controller = new $this->controller; // after this code $this->controller is set as object(welcome)#3 (0) { }.As this code instanciate controller

        if(isset($url[1]) && !empty($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
            else{
                echo "Method Not Found !";
            }
        }

        // $this->controller->$this->method; insted of this code below
        // call_user_func_array([$this->controller, $this->method], $this->params);

        if(isset($url)){
            $this->params = $url;
        }
        else{
            $this->params = [];//by default it empty array so why this code again  
        }

        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }
    
    public function url()
    {
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}

?>