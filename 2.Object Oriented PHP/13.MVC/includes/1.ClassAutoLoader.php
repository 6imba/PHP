<?php

spl_autoload_register('myAutoLoader'); //one of autoload_functions
//builtin function in php which allow us to automatically load/pull classes as soon as we instantiate a respective class inside our document.

function myAutoLoader($className){
  // $path = "../classes/";//if call from insde includes
  $path = "classes/";
  $extension = ".class.php";
  $fullPath = $path.$className.$extension;

  //class_name_error_check
  if (!file_exists($fullPath)){
      return false;
  }
  //incase if you pass worng class name in 3.Person.php i.e (Perton instead of Person)

  echo $fullPath.'<br>';
  include_once $fullPath;
}

?>
