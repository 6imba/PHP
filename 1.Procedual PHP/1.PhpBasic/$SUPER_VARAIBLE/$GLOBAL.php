<html>
<head>
    <title>$GLOBAL</title>
</head>

<!-- local varaible -->
 <?php
	function shoe1()
	{
		$function_local_variable = 100;
		echo $function_local_variable; // function in php can access its local variable only, it wont access global external variable if local varaible doesnt exist.
	}
	shoe1();
 ?>


 <!-- <?php
	$global_external_variable = 100;
	function shoe2()
	{
		echo $global_external_variable; // function in php cannot access global external variable until we define given global_external_variable as GLOBAL
	}
	shoe2();
 ?> -->

 <!-- global variable -->
<!-- 
<?php
	$global_external_variable = 100;
	function shoe3()
	{
		echo $GLOBALS['global_external_variable']; // define given variable as External_Global_Variable i.e : $GLOBALS['variable']
	}
	shoe3();
 ?> -->
</html>
