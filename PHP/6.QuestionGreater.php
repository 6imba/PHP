<?php 

$a=2;
$b=7;
$c=9;

echo "numbers = ".$a." ".$b." ".$c;

if($a>$b && $a>$c)
{
echo "<br> {$a} is Greater";
}

else if ($b>$a && $b>$c)
{
echo "<br> {$b} is Greater";
}

else
{
echo "<br> {$c} is Greater";
}

 ?>