<?php 
//$numb = ["3","6","9","12","15"];
$numb = array("3","6","9","12","15");
echo gettype ($numb)."<br>";
 ?>
<hr>

 <?php 
print_r ($numb);
  ?>
<hr>

  <pre>
  	 <?php 
		print_r ($numb);
 	 ?>
  </pre>
<hr>

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
 