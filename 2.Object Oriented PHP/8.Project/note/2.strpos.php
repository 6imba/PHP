<!DOCTYPE html>
<html>
<body>


<?php
echo strpos("I love php, I love php too!","php").'<br>';
?> 

<?php
$a = "i am boy yeah";
echo strpos($a, "boy").'<br>';
?> 

<?php
$a = "i am boy yeah";
if(strpos($a, "boy")==true){
echo "True<br>";
}
?> 

<?php
$a = "i am boy yeah";
if(strpos($a, "boy")!==false){
echo "Not False<br>";
}
?> 

</body>
</html>