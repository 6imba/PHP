<?php 
	Float : echo $float=3.7891."<br>";
	Integer : echo $integer=7.123
 ?>

 <br>

 <?php 
 	echo "Round : ".round ($float,2)."<br>";
 	echo "Ceiling : ".ceil($float)."<br>";
  	echo "Floor : ".floor($float)
  ?>

 <br>

 <?php 
 	echo "Is {$integer} integer?"."<br>";
 	echo "Is {$float} integer?"."<br>";//???
  	echo "Is {$float}float?";//???output cheak
  ?>
