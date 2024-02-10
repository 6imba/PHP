<?php

    //Database params(create constant)
    define('DB_HOST','localhost');//we need to pass in two values in params. i.e first one is the name and second one is value, define('name','value');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','php');

    // echo __FILE__.'<br>';//__FILE__ is simply the name of the current file. realpath(dirname(__FILE__)) gets the name of the directory that the file is in -- in essence, the directory that the app is installed in
    // echo dirname(__FILE__.'<br>').'<br>';//gives dir name
    // echo dirname(dirname(__FILE__.'<br>')).'<br>';//finally get our app root //gives dir of dir
    
    //APP_ROOT
    define('APP_ROOT', dirname(dirname(__FILE__.'<br>')));

    //URL_ROOT (Dynamic links)
    define('URL_ROOT','localhost/RootPHP/MVC/MVC_Framework_4');

    //SITE_NAME
    define('SITE_NAME', 'Hello_MVC_Framework');
    // echo '<br>'.SITE_NAME.'<br>';

?>