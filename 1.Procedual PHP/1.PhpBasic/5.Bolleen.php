<?php 
$new_user = true ;
$old_user = true ;
if ($new_user)
{
echo "Welcome<br>";
}

if ($old_user)
{
echo "Namaste<br>";
}
else
{
    echo "Identification Please ???<br>";
}
echo "<hr>";




$new_user = false ;
$old_user = false ;
if ($new_user)
{
echo "Welcome<br>";
}

if ($old_user)
{
echo "Namaste";
}
else
{
    echo "Identification Please ???<br>";
}
echo "<hr>";



if ($new_user == true && $old_user == false)
{
echo "Welcome";
}
else if ($new_user == false && $old_user == true)
{
echo "Namaste";
}
else if ($new_user == false && $old_user == false)
{
    echo "Identification Please ???";
}
echo "<hr>";



$new_user = true;
$old_user = false;
if ($new_user == true && $old_user == false)
{
echo "Welcome! New user";
}
else if ($new_user == false && $old_user == true)
{
echo "Namaste! Old user";
}
else if ($new_user == false && $old_user == false)
{
    echo "You are neither new nor old user.Can i have Identification Please ???";
}
echo "<hr>";




$new_user = false;
$old_user = true;
if ($new_user == true && $old_user == false)
{
echo "Welcome! New user";
}
else if ($new_user == false && $old_user == true)
{
echo "Namaste! Old user";
}
else if ($new_user == false && $old_user == false)
{
    echo "You are neither new nor old user.Can i have Identification Please ???";
}
echo "<hr>";



$new_user = false;
$old_user = false;
if ($new_user == true && $old_user == false)
{
echo "Welcome! New user";
}
else if ($new_user == false && $old_user == true)
{
echo "Namaste! Old user";
}
else if ($new_user == false && $old_user == false)
{
    echo "You are neither new nor old user.Can i have Identification Please ???";
}
echo "<hr>";

?>







<?php 
$new_user = true ;
if (!$new_user)
{
echo "ByeBye";
}


 $new_teacher= false ;
if ($new_teacher)
{
echo "Sorry";
}

$new_user = false ;
if (!$new_user)
{
echo "ByeBye";
}
 ?>
