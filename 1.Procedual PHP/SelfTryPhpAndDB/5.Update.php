<?php 
    include "1.DBconn.php";

    $ID=$_GET['passID'];
    $sql="SELECT * from selftable where id=".$ID;//selete all data of instant id
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $row=mysqli_fetch_assoc($result);//fetch all data of instant id
        $nem=$row['name'];//no need echo//index is table coln name
        $fhon=$row['contact'];
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>UpdateContact</title>
</head>
<body>
<h1>Update given Contact</h1>

    <form action="6.UpdateAction.php" method="POST">
        <label for="parichaya">Name : </label>
        <input type="text" name="parichaya" value="<?php global $nem; echo $nem ?>"><br>
        <label for="nombar">Contact : </label>
        <input type="number" name="nombar" value="<?php global $fhon; echo $fhon ?>"><br>
        <input type="hidden" name="uid" value="<?php global $ID; echo $ID?>">
        <input type="submit" value="Update">
    </form>

</body>
</html>