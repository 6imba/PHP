<?php

spl_autoload_register('myAutoLoader'); 
//builtin function in php which allow us to automatically load/pull classes as soon as we instantiate a respective class inside our document.

function myAutoLoader($className){
  $path = "../classes/";
  $extension = ".class.php";
  $fullPath = $path.$className.$extension;
  echo $fullPath.'<br>';
  include_once $fullPath;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>LoadClassAutumatically</title>
</head>
<body>
    <?php
        $person1 = new Person('Amir');
        echo $person1->getPerson();
    ?>
</body>
</html>