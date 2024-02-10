<?php
     include "1.DBconn.php";
     $ID=$_GET['passid'];
     $sql = "DELETE FROM selftable where id = $ID";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
     header("Location:2.Front.UpdateandDelete.php");
     }
     //header("Location:2.Front.UpdateandDelete.php");//only this line will also work insted of if condition
?>