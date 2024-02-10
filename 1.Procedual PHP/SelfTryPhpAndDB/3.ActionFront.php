<?php

    include "1.DBconn.php";

    $name = $_POST['naam'];
    $contact = $_POST['phoneno'];
    $sql="INSERT INTO selftable (name,contact) VALUES ('$name','$contact');";
    mysqli_query($conn,$sql);
    header("Location:2.Front.UpdateandDelete.php?Success");
?>