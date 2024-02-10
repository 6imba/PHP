<?php 
echo "Type Juggling"."<br>";
$simba=3;
echo gettype ($simba)."<br>";
$simba="5";
echo gettype ($simba)."<br>";
$apple="I have ".$simba." apples.";
echo $apple."<br>";
echo gettype ($apple)."<br><br>";

echo "Type Casting"."<br>";
settype ($apple,"integer");
echo gettype ($apple);
 ?>