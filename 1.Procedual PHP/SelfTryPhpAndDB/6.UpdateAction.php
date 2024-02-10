<?php

    include "1.DBconn.php";

    $id=$_POST['uid'];
    $name=$_POST['parichaya'];
    $contact=$_POST['nombar'];

    $sql="UPDATE selftable SET name='$name',contact='$contact' where id=$id;";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("Location:2.Front.UpdateandDelete.php");
    }
?>


