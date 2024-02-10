<!DOCTYPE html>
<html>
<head>
	<title>POST Form</title>
</head>
<body>

<form>
	<label>Name : </label>
	<input type="text" name="Name">
	<br>
	<label>Address : </label>
	<input type="text" name="Address">
	<br>
	<input type="submit" name="Register">
</form>

<?php 
$name = $_POST['Name'];
$address = $_POST['Address'];
echo "Name : {$name}<br/>";
echo "Address : {$address}<br/>";
 ?>

</body>
</html>