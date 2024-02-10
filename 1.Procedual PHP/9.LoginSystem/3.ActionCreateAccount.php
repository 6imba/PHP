<?php
    if(!isset($_POST['createact1'])) // isset method that cheack condition if we have post method from 2.CreateAccount.php and name of button that submit
    //  the post method(createact) .This means the only job of isset method is to run this file only there is some data posted from button named(createact) 
    //  thats it .... isset method is not responsible for post['index'] in below code in side if{****} note: if there is any error in this line then it 
    // will  not go further as i wrote $POST['createact'] instead of $_POST['createact'] before...
    {
        header("Location:1.FrontLoginFile.php?error::You_directly_entered_to_actioncreate_Please_SignUp_From_Form..");
        exit();
    }
    else
    {
        require 'DBconn.php';//path/file to connect to database

        $name = $_POST['username1'];//$_POST['inputed name']//post method of from
        $mail = $_POST['useremail1'];
        $password = $_POST['userpassword1'];
        $retpass = $_POST['repeatpassword1'];
        
        if ( empty($name) || empty($mail) || empty($password) || empty($retpass) )
        {
            //header("Location:1.FrontLoginFile.php");//this line will navigates this page to "1.FrontLoginFile.php" page
            header("Location:2.CreateAccount.php?error=empty& UidName=".$name."& UidEmail=".$mail);//this line will navigates this page to "2.FrontLoginFile.php" page as well as print all the error text written after ?php?error=emptyfields--UidName=".$name."UidEmail=".$mail.....If field are empty
            exit();//this function will help us to exit from this file after code inside this if statement/codition is true/satiafies
        }


        else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$name))
        {      //if both username and email is invalid...                                             
            header("Location:2.CreateAccount.php?error=invalid_Email and Invali_UserName");
            exit();
        }


        else if (!filter_var($mail, FILTER_VALIDATE_EMAIL))// correct order of email is (varchar@varchar.text)
        {       //if only email is invalid...                                             
            header("Location:2.CreateAccount.php?error=invalid_Email& UidName=".$name);
            exit();
        }

        else if (!preg_match("/^[a-zA-Z0-9' ']*$/",$name))//Username Validation//preg_match is php function that cheack if string variable is in correct pattern or not
        {       //if only username is invalid... 
            header("Location:2.CreateAccount.php?error=Invalid_Username=".$name);
            exit();
        }

        else if ($password != $retpass)
        {
            header("Location:2.CreateAccount.php?error=Passwords_Unmatch& UidName=".$name."& UidEmail=".$mail);
            exit();
        }

        else//cheack if input user_name already exist???
        {
            $sql = "SELECT Uid From logintable WHERE UidName=?";//select id of the given name
            $statement = mysqli_stmt_init($conn);//create prepare statement

            if (!mysqli_stmt_prepare($statement,$sql))//prepare prepare_statement or connection//cheack if the sql query is possible with db connection or not?
            {
                header("Location:1.FrontLoginFile.php?error=Sqli_Conn_Error..");
                exit();
            }
            else
            {   //may be all function feature is carried by $statement variable
                mysqli_stmt_bind_param($statement,"s",$name);//sql statement can be executed only after this line or binding
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);//store the result in $statement
                $resultCheck = mysqli_stmt_num_rows($statement);//count the numbers of row of result that $statement varible holds OR of rows where UidName='$name'.If there is any similar name present in table of DB then it will count 1 as 1>0 error occur...as there shouldnt be any similar username..

                if ($resultCheck>0) //cheack if input user_name already exist???
                {
                    header("Location:1.FrontLoginFile.php?error::Username-repeat");
                    exit();
                }//cheack repeat name close 
                else
                {         //now  insert into db
                    $sql="INSERT INTO logintable (UidName,UidEmail,UidPassword) VALUES (?,?,?)";
                    $statement = mysqli_stmt_init($conn);//again initialize new connection because sql quereey of above prepare statement and this prepare statement  are different...

                    if (!mysqli_stmt_prepare($statement,$sql))
                    {
                        header("Location:1.FrontLoginFile.php?error::Connection_Fail");
                        exit();
                    }
                    else
                    {
                        $hashpassword = password_hash($password,PASSWORD_DEFAULT);//encrypt password
                        mysqli_stmt_bind_param($statement,"sss",$name,$mail,$hashpassword);//mistakely i wrote $email instead of $mail here ..due to which there were no any error but also inputed value were also not saved in db
                        mysqli_stmt_execute($statement);
                        header("Location:1.FrontLoginFile.php?Signup=Success");
                        exit();
                    }
                }
            }
        }
        
        mysqli_stmt_close($statement);//close prepare statement
        mysqli_close($conn);//close connection of prepare statement

        // else
        // {
        // $sql="INSERT INTO logintable (UidName,UidEmail,UidPassword) VALUES ('$name','$mail','$password');";
        // $result=mysqli_query($conn,$sql);
        // header("location:1.FrontLoginFile.php");
        // }
    }
?>