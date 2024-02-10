<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="3.ActionUpload.php" method="post" enctype="multipart/form-data">
        <label for="naam">Enter your name : </label>
        <input type="text" name="naam">
        <br>
        <input type="file" name="choosenfile">        
        <br>
        <input type="submit" name="button" value=Save>
    </form>

    <table border="1" cellspacing="0px" cellpadding="0px">
        <tr>
            <th>Roll No.</th>
            <th>Tasbir</th>
            <th>Name</th>
        </tr>
        <?php
            include "1.DB.php";
            $sql="SELECT * FROM tablefour ;";
            $result=mysqli_query($conn,$sql);
            if ($result)
            {
                while($data=mysqli_fetch_assoc($result))
                {
                $rn = $data['RollNo'];
                $pc = $data['PicSrc'];
                $nm = $data['Name'];
        ?>

        <tr>
            <td><?php echo $rn ?></td>
            <td><a href="<?php echo $pc ?>"><img src="<?php echo $pc ?>" height="200px" width="200px"></a></td>
            <td><center><?php echo $nm ?></center></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>