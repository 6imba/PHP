<!-- <?php 
	function say_hello()
	{
		echo "<h1>Hello World</h1>";
	}
	say_hello();
 ?>
<hr>


 <?php 
	function say_hello_to($name)
	{
		echo "Hello $name"."<br>";
	}
	say_hello_to("Humans"); //say_hello_to("Humans")."<br>";....line doesnt break by this so break in line 13....s
	say_hello_to("Being");
 ?>
<hr>


<?php 
	function say_to($person)
	{
		echo "Hello $person"."<br>";
	}
	$person="Birkhe";
	say_to($person);
 ?>
 <hr>


 <?php 
	function add($x,$y)
	{
		$sum=$x+$y;
		return $sum;
	}
	$result=add(5,6);
	echo "Answer : $result"."<br>";

	echo "Answer : ".add(3,56);
 ?>
<hr>


 <?php 
	function add_sub($x,$y)
	{
		$plus=$x+$y;
		$minus=$x-$y;
		return [$plus,$minus];
	}
	$result=add_sub(5,6);
	echo "Answer : $result[0]<br>";
	echo "Answer : $result[1]<br>";
 ?>
<hr>


  <?php 
	function calculus($x,$y)
	{
		$plus=$x+$y;
		$minus=$x-$y;
		return [$plus,$minus];
	}
	list($a,$b)=calculus(5,6);//lists
	echo "$a<br>";
	echo "$b";
 ?>

 -->

<!-- local varaible -->
 <!-- <?php
	function shoe1()
	{
		$function_local_variable = 100;
		echo $function_local_variable; // function in php can access its local variable only, it wont access global external variable if local varaible doesnt exist.
	}
	shoe1();
 ?> -->


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


<?php
	function shoe4($arg1)
	{
		echo $arg1;
	}
	$var = 10000;
	shoe4($var);
 ?> 