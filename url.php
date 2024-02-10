<?php

    $url = 'http://localhost/mvcframework/shop';
    $url = rtrim($url); //remove /from the end of the url
    $url = filter_var($url, FILTER_SANITIZE_URL); //filter that removes all illegal URL characters
    $url = explode('/',$url); //Break a string by / and store into an array form

    print_r($url);
    echo '<br>';
    unset($url[0]);
    print_r($url);
    echo '<br>';
    unset($url[1]);
    print_r($url);
    echo '<br>';
    unset($url[2]);
    print_r($url);
    echo '<br>';

    echo 'urlvalues : ';
    print_r (array_values($url));
    echo '<br>';

    $params =[];
    $params = $url ? array_values($url) : [];
    echo 'params : ';
    print_r($params);
    echo '<br>';
    var_dump($params);
    echo '<br>';

    $url = NULL;
    $params =[];
    $params = $url ? array_values($url) : []; // with $url ? if array_values($url) : else []
    print_r($params);
    echo '<br>';
    var_dump($params);

    echo '<br>';
  


?>







<!-- 
if (isset($url)) will check for the presence of a set variable.

if ($url) will check for a truthy value from the variable itself.

It's called a ternary statement. [value] = [condition] ? [if true] : [else].
 -->