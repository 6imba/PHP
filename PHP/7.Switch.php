<!--
<?php 

$a=3;
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

 -->


<!--
<?php 

$a=3;
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
 -->


<!--
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
	case '3':
	echo "a equals to 3.<br/>";

}

 ?>
 -->

 <!--so use break;...-->


 <!--
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
 -->


<!--
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
 -->

  <!--if not use break; then u can see it...-->

<!--
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
-->



<!--
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
 -->


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



 







