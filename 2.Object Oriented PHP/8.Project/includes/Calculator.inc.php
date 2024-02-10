<?php
include "ClassAutoLoader.php"; // here ClassAutoLoader.php and Calculator.inc.php both lies on same root include so not need to write include in include "includes/ClassAutoLoader.php";

$obj1 = new Calculator($_GET['numb1'], $_GET['numb2'], $_GET['operation1']);
echo 'Answer = '.$obj1->calculator();
echo '<br> <a href="../1index1.php">Go To 1index1.php</a>';
?>