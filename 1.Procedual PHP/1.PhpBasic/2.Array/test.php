<?php

$arr1 = array(1,2,3,4,5);
$arr2 = (array) '1,2,3,4,5';

var_dump($arr1);
echo '<br>';
echo $arr1[0];
echo '<br>';

var_dump($arr2);
echo '<br>';
echo $arr2[0];

?>