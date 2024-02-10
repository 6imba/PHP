
<?php 
$alpha = "SimbA";
$var1 = 10;
$num = 5;
echo gettype ($var1);
echo "<hr>";
settype ($var1,"string");
echo gettype ($var1);
echo "<hr>";
echo gettype ($num);
echo "<hr>";
echo gettype ("$num");
echo "<hr>";
echo gettype ("$alpha");
 ?>
 
<hr>

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
echo gettype ($apple)."<br>";
echo $apple;
 ?>