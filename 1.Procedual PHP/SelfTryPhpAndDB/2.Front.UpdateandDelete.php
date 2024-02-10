<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="8.style.css">
    <title>Self Contact</title>
</head>
<body>
    <h1>Please fill up the form to add contact into DB</h1>
<!-- data entry -->
    <form action="3.ActionFront.php" method="POST">
    <label for="naam">Name : </label>
    <input type="text" name="naam"><br>
    <label for="phoneno">Contact : </label>
    <input type="number" name="phoneno"><br>
    <input type="submit" value="Save"><br>
    </form>
<!-- /data entry -->
    <hr>

    <h3>    <datagrid>List Of Perssonel in DB :</datagrid></h2>
<!-- data interact/call from DB -->

    <table>
        <tr>
            <td>Name</td>
            <td>Contact</td>
            <td>Action</td>
        </tr>
    <?php
        include "1.DBconn.php";
        $sql="select * from selftable;";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            while($data=mysqli_fetch_assoc($result))
            {  
                $id=$data['id'];//vriable id
                $name=$data['name'];
                $contact=$data['contact'];
    ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $contact?></td>
                <td>
                    <a href="4.Delete.php?passid=<?php echo $id ?>">Delete</a> <!--?passid=?php echo $id ?>(variable id)==>passing variable id to delete herf -->
                    <a href="5.Update.php?passID=<?php echo $id ?>">Update</a>  <!--here $id is in php and we are calling it in this line html so we again use php and echo variable in php-->
                </td>
            </tr>
    <?php
            }
            
        }
    ?>
    </table>
<!-- /data interact/call from DB-->

</body>
</html>