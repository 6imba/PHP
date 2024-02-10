<?php 

    include '1.DatabaseConnection.php';//note
    $id = $_GET['id_pass']; // to get value use $_GET and to store value use $_POST
    $sql = "DELETE FROM contactperssonal where id = $id";
    $result = mysqli_query($conn,$sql);
    if ($result)
    {
        header("location:2.FrontPage.php?deleter successful");// The header() function sends a raw HTTP header to a client
    }
?>
