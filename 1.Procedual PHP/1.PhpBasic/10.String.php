<?php 
	$first="Hello,Namaste and Goodmorning!!!";
	$second="ma hu Nepali Babu made in Nepala.....lai...bari lai!!";
	$third=$first;
	$third=$second;
	echo $third."<br>";
	echo $first." --- ".$second;
	$fourth="AmiR"
 ?>

 <hr>
 <br>

<?php 
	echo strtolower($fourth)."<br>";
	echo strtoupper($fourth)."<br>";
	echo ucfirst($second)."<br>";
	echo ucwords($second)."<br>";
 ?>

 <hr>
 <br>

 <?php 
 	echo strlen($fourth)."<br>";
 	echo "A".trim(" B C D ")."E"."<br>";//remove space infront of B nad after D..
 	echo strstr($first,"e")."<br>";
 	echo str_replace("Hello","Syaudai",$first);
  ?>

 <hr>
 <br>

<?php 
	echo str_repeat($fourth,3)."<br>";
	echo substr($first,5,1)."<br>";
	echo substr($first,5,2)."<br>";
	echo substr($first,5,10)."<br>";
	echo strpos($first,"and")."<br>";
	echo strchr($first,"d")."<br>";
 ?>

 <hr>
 <br>

 