<html>
<head>
    <title>GET</title>
</head>

<!-- GET method of form, see in url, data (key value paired) is shown -->
<form method="GET">
    <input type="hidden" name="naam1" value="Amir">
    <input type="" name="naam2" value="Shrestha">
    <input type="text" name="naam3" >
    <button type="submit" name="submitbtn" >Button</button>
</form>

<?php
if(isset($_GET["submitbtn"]))
{
    echo $_GET['naam1'];
    echo $_GET['naam2'];
    echo $_GET['naam3'];
}
else
{
    echo "PRESS BUTTON TO SEE VALUE";
}
?>

</html>