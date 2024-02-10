<!-- 
<?php 
$age =[2,17,23,90];
foreach ($age as $val)
{
	echo "$val <br>";
}
 ?>
 -->

<?php 
$age =[2,17,23,90];
foreach ($age as $key => $val)
{
	if ($key==2)
	{
		continue;
	}
	echo "$val <br>";
}
 ?>