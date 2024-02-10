
<?php 
$a=2;
switch ($a)
{
	case '0':
	echo "a equals to 0.<br/>";
	break;
	case '1':
	echo "a equals to 1.<br/>";
	break;
	case '2':
	echo "a equals to 2.<br/>";
	break;
	case '3':
	echo "a equals to 3.<br/>";
	break;
}
?>
<hr>




<?php 
$a=2;
switch ($a)
{

	case '0':
	echo "a equals to 0.<br/>";
	case '1':
	echo "a equals to 1.<br/>";
	case '2':
	echo "a equals to 2.<br/>";
	case '3':
	echo "a equals to 3.<br/>";

}
 ?>
 <!--so use break;...-->
<hr>


 
 <?php
 $a=1;
switch ($a)
{
	case '0':
	echo "a equals to 0.<br/>";
	case '1':
	echo "a equals to 1.<br/>";
	case '2':
	echo "a equals to 2.<br/>";
	break;
	case '3':
	echo "a equals to 3.<br/>";
}
 ?>
<hr>



<?php
$user_type='Student';
switch ($user_type )
{
	case 'Employee':
	echo "Good Morning !<br/>";
	break;
	case 'Student':
	echo "Hello !<br/>";
	break;
	case 'Client':
	echo "Namaste !<br/>";
	break;
}
?>
<hr>

  <!--if not use break; then u can see it...-->


<?php
$user_type='Student';
switch ($user_type )
{
	case 'Employee':
	case 'Student':
	echo "Good Morning !<br/>";
	break;
	case 'Client':
	echo "Namaste !<br/>";
	break;
}
?>
<hr>




<?php
 $user_type='Employee';
switch ($user_type )
{
	case 'Employee':
	case 'Student':
	echo "Good Morning !<br/>";
	break;
	case 'Client':
	echo "Namaste !<br/>";
	break;
}
?>
<hr>


 <?php
 $user_type='Client';
switch ($user_type )
{
	case 'Employee':
	case 'Student':
	echo "Good Morning !<br/>";
	break;
	case 'Client':
	echo "Namaste !<br/>";
	break;
}
 ?>



 







