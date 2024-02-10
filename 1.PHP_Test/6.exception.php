<!DOCTYPE html>
<html>
<body>

<?php
// function divide($dividend, $divisor) {
//   if($divisor == 0) {
//     throw new Exception("Division by zero");
//   }
//   echo("Hi");
//   return $dividend / $divisor;
// }
// echo divide(5, 0);
?>

<?php 
    function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new Exception("Division by zero");
    }
    echo("Hi");
    return $dividend / $divisor;
    }
    try{
        echo divide(5, 0);
    }catch(Exception $e){
        echo "Unable to divide.</br>";
        // echo $e;
    }
?>

<!-- The try...catch...finally Statement -->

</body>
</html>
