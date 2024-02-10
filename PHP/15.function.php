<!--<?php 
	function say_hello()
	{
		echo "<h1>Hello World</h1>";
	}
	say_hello();
 ?>
 -->

 <!-- <?php 
	function say_hello_to($name)
	{
		echo "Hello $name"."<br>";
	}
	say_hello_to("Humans"); //say_hello_to("Humans")."<br>";....line doesnt break by this so break in line 13....s
	say_hello_to("Being");
 ?> -->

<!-- <?php 
	function say_to($person)
	{
		echo "Hello $person"."<br>";
	}
	$person="Birkhe";
	say_to($person);
 ?> -->

 <!-- <?php 
	function add($x,$y)
	{
		$sum=$x+$y;
		return $sum;
	}
	$result=add(5,6);
	echo "Answer : $result"."<br>";

	echo "Answer : ".add(5,6);
 ?> -->

<!--  <?php 
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
 -->



  <?php 
	function calculus($x,$y)
	{
		$plus=$x+$y;
		$minus=$x-$y;
		return [$plus,$minus];
	}
	list($a,$b)=calculus(5,6);
	echo "$a<br>";
	echo "$b";
 ?>






































