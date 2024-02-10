<?php
echo $_SERVER['HTTP_HOST'].'<br>';	//Returns the Host header from the current request : localhost
echo $_SERVER['REQUEST_URI'].'<br>';  //will give you : /Root%20Folder%20of%20PHP%20Practise/2.Object%20Oriented%20PHP/8.Project/$_Server.php
//here complete url is : http://localhost/Root%20Folder%20of%20PHP%20Practise/2.Object%20Oriented%20PHP/8.Project/$_Server.php

if(strpos($_SERVER['REQUEST_URI'], "8.Project")!==false){
echo "Url of this file contain '8.Project' which means location of this current file somewhere contain '8.Project'";
}
?>