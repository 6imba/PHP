<?php

    include '1.DatabaseConnection.php';

    $id      = $_POST['id1'];//these are send by form
    $name    = $_POST['name1'];
    $contact = $_POST['phone1'];
    //if u open directly not coming from action of 5.Update.php file it will not define id1,name1,phone1 index
    $sql = "UPDATE contactperssonal SET name='$name',phone='$contact' where id=$id";
    $result = mysqli_query($conn,$sql);//this line will update finally
    if($result)
    {
        header("Location:2.FrontPage.php?Succefully_Updated");
    }

?>
