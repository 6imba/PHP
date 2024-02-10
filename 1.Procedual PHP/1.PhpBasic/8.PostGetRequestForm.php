<!DOCTYPE html>
<html>
<head>
	<title>POST Form</title>
</head>
<body>

<form action="8.Ppost.php" method="post">
	<label >Name : </label>
	<input type="text" name="Name">
	<br>
	<label>Address : </label>
	<input type="text" name="Address">
	<br>
	<input type="submit" name="Register">
</form>
<!-- when u click submit it will send the form-data by post method to the file name 8.Ppost.php -->



<!-- But what to do if we want to send form-data to the same file .....like below ... -->
<!-- 
Name : <?php echo $_POST['Name'];?><br>
Address : <?php echo $_POST['Address'];?><br>
 -->
<!-- 
<?php 
$name = $_POST["Name"];
$address = $_POST["Address"];
echo "Name : {$name}<br/>";
echo "Address : {$address}<br/>";
 ?> 
 -->

</body>
</html>