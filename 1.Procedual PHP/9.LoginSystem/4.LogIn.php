<?php

if (isset($_POST['buttonlogin']))
{
    require 'DBconn.php';

    $usermail=$_POST['email'];
    $userpwd=$_POST['password'];

    if (empty($usermail) || empty($userpwd))
    {
        header("Location:1.FrontLoginFile.php?error=empty_feilds");
        exit();
    }
    else
    {
        $sql="SELECT * FROM logintable WHERE UidName=? OR UidEmail=?;";
        $statement=mysqli_stmt_init($conn);//create new prepare statement//(initialize this new prepare statement by refering to connection'$conn' that we have in DBconn.php)//initialize statement//initialize with correct connection...//new connection
        if (!mysqli_stmt_prepare($statement,$sql))//prepare/make ready prepare statement//now we want to run the sql statement and at the same time check if it does actually work at the database.....if it doesnt work error ,here only check if $sql works with database it doesnt check we have got result from db.... so we need to fetch data like in line 21 
        {
            header("Location:1.FrontLoginFile.php?error==>sql error");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($statement,"ss",$usermail,$usermail);//passing parameter from the user into db and see if can get the result from the above sql statement...
            mysqli_stmt_execute($statement);//execute all statement 
            $result=mysqli_stmt_get_result($statement);//after execution all data is stored in $result from $statement...
            if ($row = mysqli_fetch_assoc($result))
            {
                $passcheck = password_verify($userpwd,$row['UidPassword']);//compare password inside db and password that user inputed
                if ($passcheck == false)
                {
                    header("Location:1.FrontLoginFile.php?error=Incorrect_Password");
                    exit();
                }
                else if ($passcheck == true)
                {
                    session_start();//session started
                    $_SESSION['ID'] = $row['Uid'];
                    $_SESSION['NAME'] = $row['UidName'];
                    $_SESSION['email'] = $row['UidEmail'];
                    header("Location:login.php?mail=".$_SESSION['email']);//login
                    exit();
                }

            }
            else
            {
                header("Location:1.FrontLoginFile.php?error=No_Account");
                exit();
            }
        }

    }
}

else
{
    header("Location:1.FrontLoginFile.php");
}