<!-- Inserting data into database from webpage...................... -->
<!-- Interacting with DB -->
<!-- Action of form -->

<?php echo "Hello World I am action of Form" ?><!--this line wont print as header function will sent it to it corresponding location-->

<?php

    include "DatabaseConnectionFile.php";

        //$variable  = $_POST['inputname'];.....variable declaring
        $firstname = $_POST['fname']; 
        $lastname  = $_POST['lname'];
        $mail      = $_POST['email'];
        $userid    = $_POST['u_id'];
        $userpass  = $_POST['u_pass'];

        $sql = "INSERT into userstable (fname,lname,email,u_id,u_pass) values ('$firstname','$lastname','$mail','$userid','$userpass');";//sql quring placed in $sql varaible
        mysqli_query($conn,$sql);//quering 

        header("Location:2.Form.InsertIntoDatabase.php?Success");
        // when u click to button(sign up) u will go to this action="ActionInsertIntoDatabase2.php" file so inorder to return to frontpage(InsertIntoDatabase.php) after submmition or completion of task we use header phphfunction aslo print message(success) in url of this existing page
        //header("Location: ../filename?message");...if file inside folder

?>

<!-- if u directly load only this file it load null value into database so how to solve it like run the above php code only if value is passed-->
