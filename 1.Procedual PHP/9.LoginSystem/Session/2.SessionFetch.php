<?php
session_start();//compalsary if we frogot to start session then this page will not define $_SESSION['email'];
    $mail = $_SESSION['email'];
    echo "Firstly here also session is started.If we frogot to start session then this page will not define "."$"."SESSION['email'];<br>Hello World I am the file that fetches the value of session stored in another file(1.SessionAssign.php).<br>Here we fetch the value stored in key['email']  from the (1.SessionAssign.php) file and the store it in new varible mail in this 2.SessionFetch.php)<br><br>Therefore, "."$"."mail = ".$mail;
?>