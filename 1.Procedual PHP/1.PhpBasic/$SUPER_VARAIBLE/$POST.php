<html>
<head>
    <title>POST</title>
</head>

<!-- POST method of form see in url, no data (key value paired) is shown -->
<form method="POST">
    <input type="hidden" name="naam1" value="Amir">
    <input type="" name="naam2" value="Shrestha">
    <input type="text" name="naam3" >
    <button type="submit" name="submitbtn" >Button</button>
</form>

<?php
if(isset($_POST["submitbtn"]))
{
    echo $_POST['naam1'];
    echo $_POST['naam2'];
    echo $_POST['naam3'];
}
else
{
    echo "PRESS BUTTON TO SEE VALUE";
}
?>

</html>