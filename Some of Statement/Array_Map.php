<?php
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
echo '<br>';
?>




<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
echo '<br>';
?>




<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str).'<br>';
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>




<?php

$arrA = array(19, 21, 46, 29);
$arrB = array('K', 'K', 'A', 'V');
$arrO = array_map(null, $arrA, $arrB);
print_r($arrO);
echo '<br>';

?>



<!-- PHP array_map() Using Multiple Arrays
You can take three arrays and pass those arrays to an array_map function and see the output. -->

<?php

function subtractAdd($a, $b, $c) {
  return $a - $b + $c;
}

$arrA = array(19, 21, 46, 29);
$arrB = array(18, 19, 20, 21);
$arrC = array(1, 2, 26, 8);
$arrO = array_map("subtractAdd", $arrA, $arrB, $arrC);
print_r($arrO);

?>



<!-- 
PHP | array_map() Function:

The array_map() is an inbuilt function in PHP and it helps to modify all elements one or more arrays according to some user-defined 
condition in an easy manner. It basically, sends each of the elements of an array to a user-defined function and returns an array with 
new values as modified by that function.

Syntax:
array_map(functionName,arr1,arr2...) 
-->