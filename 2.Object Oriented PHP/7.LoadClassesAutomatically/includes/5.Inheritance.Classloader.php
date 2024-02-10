<?php
echo '2.class loader file *******************  <br>';

spl_autoload_register('myAutoLoader'); 
//builtin function in php which allow us to automatically load/pull classes as soon as we instantiate a respective class inside our document.

function myAutoLoader($className){
  echo '4.7. class loader function .................... <br>';
  $path = "classes/";
  $extension = ".class.php";
  $fullPath = $path.$className.$extension;

  //class_name_error_check
  if (!file_exists($fullPath)){
      return false;
  }
  //incase if you pass worng class name in 3.Person.php i.e (Perton instead of Person)

  echo '5.8  '.$fullPath.'<br>';
  include_once $fullPath;
}

?>
