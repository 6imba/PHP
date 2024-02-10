 f<?php
if( $_GET['mail'] == "kanxa@gmail.com" )
{
    header("Location:10.kanxablog.php");
 }
else if( $_GET['mail'] == "sagarmatha1@gmail.com" )
{
    header("Location:11.sagarmatha.php");
}
else if( $_GET['mail'] == "apple@gmail.com" )
{
    header("Location:12.apple.php");
}

else
{
    header("Location:1.FrontLoginFile.php?LohIn_Successful!");
}
?>