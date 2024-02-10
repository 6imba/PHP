<?php 
define("week",7);
echo week;
define("week",8);//cannot define contant/variable which is already define
echo week;//as contant/variable already declear as 7 so declaring 8 is invalid
 ?>
<hr>



 <?php 
$age=13;
echo $age;
if($age < 18)
{
	echo " : Teen";
}
else
{
	echo " : Adult";
}
?>
<hr>


<?php 
//variable declearation
$a=17;
$b=2;
echo $a." and ".$b."<br>";
if($b > 0)
{
	$div = $a/$b;
	echo " DivisioN = ".$div;
}
else
{
  echo "Infinity";
}
?>
<hr>



<?php 
//again same variable new declearation
$a=8;
$b=2;
echo $a." and ".$b."<br>";
if($b > 0)
{
	$div = $a/$b;
	echo " DivisioN = ".$div;
}
else
{
  echo "Infinity";
}
?>
<hr>



<!-- Example:2 -->
<?php 
define("b",3);
define("a",18);
echo a." and ".b."<br>";
if(b > 0)
{
	$div = a/b;
	echo " DivisioN = ".$div;
}
else
{
  echo "Infinity";
}
?>

<hr>
<!-- here $a and $b is already define above in Example:2 -->
<?php 
define("b",4);
define("a",7);
echo a." and ".b."<br>";
if(b > 0)
{
	$div = a/b;
	echo " DivisioN = ".$div;
}
else
{
  echo "Infinity";
}
?>
<!-- you can define a variable only one time but you can declare it as many time you want. -->