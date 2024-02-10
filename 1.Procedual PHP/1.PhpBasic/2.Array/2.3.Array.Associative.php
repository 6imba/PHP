
 <?php 
$person = [ "first_name" => "John",
			"last_name"  => "Bahadur",
			"address"    => "pade cottage",
			"city"		 => "Bajrang Nagar",
			];

foreach ($person as $attribute => $data)
		{
			echo "{$attribute}:{$data} <br>";
		}
 ?> 
<hr>


<?php 
$person = [ "first_name" => "John",
			"last_name"  => "Bahadur",
			"address"    => "pade cottage",
			"city"		 => "Bajrang Nagar",
			];

foreach ($person as $attribute => $data)
		{
			$attr_nice = ucwords (str_replace("_"," ",$attribute));
			echo "{$attr_nice}:{$data} <br>";
		}
 ?> 
<hr>


 <?php 
$A = [ "first_name" => "John",
			"last_name"  => "Bahadur",
			"address"    => "pade cottage",
			"city"		 => "Bajrang Nagar",
			];

foreach ($A as $B => $C)
		{
			echo "{$B}:{$C} <br>";
		}
 ?> 
