<html>
<head>
    <title>GET</title>
</head>

<form method="GET">
    <input type="text" name="naam1" required>
    <button type="submit" name="submitbtn" >Button</button>
</form>

<?php
if(isset($_GET["submitbtn"])) // if submit button is pressed/seted
{
    echo $_GET['naam1'];
}
else
{
    echo "PRESS BUTTON TO SEE VALUE";
}
?>

</html>