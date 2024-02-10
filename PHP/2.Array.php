<?php 
//$numb = ["3","6","9","12","15"];
$numb = array("3","6","9","12","15");
echo gettype ($numb)."<br>";
 ?>

<br>

 <?php 
print_r ($numb);
  ?>

<br>

  <pre>
  	 <?php 
		print_r ($numb);
 	 ?>
  </pre>

<br>

<?php 
$name = ["FirstName"=>"Amir","LastName"=>"Shrestha"];
 ?>

<?php 
echo $name ["FirstName"];
echo $name ["LastName"];
 ?>

<br>

<?php 
echo $name ["FirstName"]." ";
echo $name ["LastName"];
 ?>

<br>

<?php 
echo $name ["FirstName"].$name ["LastName"];;
 ?>
 