<?php
    include "1.DB.php";

    if (isset($_POST['button']))
    {
        $name=$_POST["naam"];
        $filename=$_FILES['choosenfile']['name'];
        $filetemp=$_FILES['choosenfile']['tmp_name'];
        $filedest='UploadFile/'.$filename;
        move_uploaded_file($filetemp,$filedest);

        if($name !='' && $filename !='')
        {
        $sql="INSERT INTO tablefour (Name,PicSrc) Values ('$name','$filedest');";
        $insert=mysqli_query($conn,$sql);
            if ($insert)
            {
                header("Location:2.Front.php?Succefully_Inserted");
            }
        }
        else 
        {
            echo "Empty_Fields !";
        }
    }
?>