<?php

    //Core App Class
    class Core{
        protected $currentController ='Pages';
        protected $currentMethod ='contact';
        protected $params =[];

        public function __construct(){
            // line1......................
            $url = $this->getUrl();//this  Core class
            if($url != NULL AND file_exists('../app/controllers/'.ucwords($url[0]).'.php')){//look in controller if file exists? looking for a right file
                $this->currentController = ucwords($url[0]);//set new currentController
                unset($url[0]);//unset given value/empty
            }

            //required the controller
            require_once '../app/controllers/'.$this->currentController.'.php';
            $this->currentController_obj = new $this->currentController();//instanciate Pages etc class (currentController_class)
            // $currentController_obj = new $currentController(); //we are inside class(Core) so error Undefined property: Core::$currentController_obj 
            // $this->currentController = new $this->currentController(); //allowed
            // $obj1 = new Pages();

            //check for second part of the url i.e method
            if(isset($url[1])){
                if(method_exists($this->currentController_obj,$url[1])){
                    $this->currentMethod  = $url[1];
                    unset($url[1]);
                }
            }

            //get parameters
            $this->params = $url ? array_values($url) : []; //ternary statement //if there is any value left in $url cast it in array form else set it empty/null/[]
            // line1...................... Get Url Parameters
            // var_dump($this->params); //when there are othr parameter in left in url $this->params get occupy

            //call a callback with array of params
            call_user_func_array([$this->currentController_obj, $this->currentMethod], $this->params);//call controller/view
            //call_user_func_array([controllerClass, methodInsideClass], parametersNeedToPassToMethod);
            // call_user_func_array(array($this->currentController, $this->currentMethod), $this->params);
            //i.e call_user_func_array(PagesClass_object, PagesClass_method], Params_passed_into_PagesClassMethod);
        }

        public function getUrl(){ 
            if (isset($_GET['url'])){
                $url = rtrim($_GET['url'],'/'); //remove /from the end of the url
                $url = filter_var($url, FILTER_SANITIZE_URL); //filter that removes all illegal URL characters
                $url = explode('/',$url); //Break a string by / and store into an array form
                return $url;//return array
            }
        }
    }

?>