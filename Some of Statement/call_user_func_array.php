<?php
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}


// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));

echo '<br>';
// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));
echo '<br>';
call_user_func_array([$foo, "bar"], array("three", "four"));
echo '<br>';

?>


<?php  

    class Pages
    {
        protected $currentController ='Pages';
        protected $currentMethod ='index';
        protected $params =[];


        public function __construct(){
            echo "Class:Pages ";
            echo '<br>';
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }
        public function index(){
            echo "Methos:index !";
        }

    }

    $obj1 = new Pages();

?>

<!-- call_user_func_array — Call a callback with an array of parameters -->
<!-- see MVC_framework4 -->