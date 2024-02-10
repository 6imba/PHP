
<?php 
$g =[2,17,23,90];
foreach ($g as $val)
{
	echo "$val <br>";
}

echo "<hr>";

$age =[2,4,6,8,10,12,14,16,18];
foreach ($age as $key => $val)
{
	if ($key==3 || $key==6 )
	{
		continue;
	}
	echo "$val <br>";
}
 ?>