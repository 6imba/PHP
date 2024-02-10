<?php 
	echo "Float : ".$float=3.7891."<br>";
	echo "Integer : ".$integer=7.123;
	//here Float : and Integer : doesnot get print in screen caz php demands echo
 ?>
 <hr>

 <?php 
 	echo "Round : ".round ($float,2)."<br>";
 	echo "Ceiling : ".ceil($float)."<br>";
  	echo "Floor : ".floor($float)
  ?>
 <hr>

 <?php 
 	echo "Is {$integer} integer?"."<br>";
 	echo "Is ".$float." integer?"."<br>";//???
  	echo "Is {$float}float?";//???output cheak
  ?>
