<?php

    //Database params(create constant)
    define('DB_HOST','localhost');//we need to pass in two values in params. i.e first one is the name and second one is value, define('name','value');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','php');

    // echo __FILE__.'<br>';//__FILE__ is simply the name of the current file. realpath(dirname(__FILE__)) gets the name of the directory that the file is in -- in essence, the directory that the app is installed in
    // echo dirname(__FILE__.'<br>').'<br>';
    echo dirname(dirname(__FILE__.'<br>')).'<br>';//finally get our app root
    
    //APP_ROOT
    define('APPROOT', dirname(dirname(__FILE__))); // APP_Root ==> C:\xampp\htdocs\RootPHP\MVC\MVC_LogIn_6\app 
   

    //URL_ROOT (helps to create Dynamic links)
    define('URLROOT', 'http://localhost/RootPHP/MVC/MVC_LogIn_6');
    // define('URL_ROOT','localhost/RootPHP/MVC/MVC_LogIn_6');
    // define('URL_ROOT','RootPHP/MVC/MVC_LogIn_6');

    //SITE_NAME
    define('SITENAME', 'Login & Register script');
?>