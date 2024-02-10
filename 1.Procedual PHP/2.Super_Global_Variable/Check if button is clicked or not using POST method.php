

 <form action="" method="POST">
<label>Enter Your Name Please:</label>
<input type="text"name=" name_entered" />
<br><br>
<input type="submit" name="submitbutton" value="Submit"/>
</form>

<?php
$name= $_POST['name_entered'];//......line1
$submitbutton= $_POST['submitbutton'];//......line2
if ($submitbutton)
{
    if (!empty($name)) 
        {
        echo 'The name you entered is ' . $name;
        }
    else 
        {
        echo 'You did not enter a name. Please enter a name into this form field.';
        }
}
?>

<!-- //here it will show error  as undefine index name_entered in $_POST['name_entered'] in line 1 and undefine index submitbutton in $_POST['submitbutton'] in line 2.

Notice: Undefined index: name_entered in C:\xampp\htdocs\Root Folder of PHP Practise\1.Procedual PHP\2.Super_Global_Variable\Check if button is clicked or not using POST method.php on line 11

Notice: Undefined index: submitbutton in C:\xampp\htdocs\Root Folder of PHP Practise\1.Procedual PHP\2.Super_Global_Variable\Check if button is clicked or not using POST method.php on line 12

This is because untill and unless you click submitbutton :
$name is not set as index name_entered in line1 inside $_POST[] variable is not defined,
$submitbutton is not set as index submitbutton in line2 inside $_POST[] variable is not defined,
OR are not posted.
so firstly you have to check if the name of button is set or not 
before u calling inside php where index inside post method is set olny when submitbutton is clicked. -->



<!-- example : 2 -->
<!-- 
<form method="POST">
<label>Enter Your Name Please:</label>
<input type="text"name="name_entered" />
<br><br>
<input type="submit" name="submitbutton" value="Submit"/>
</form>

<?php
// if (isset($_POST['name_entered']))
// if (isset($_POST['submitbutton']) && isset($_POST['name_entered']))
if (isset($_POST['submitbutton']))
    {
        echo "Your saved Name is ".$_POST['name_entered'];
    }
else 
    {
        echo 'You have not saved';
    }
?> -->
