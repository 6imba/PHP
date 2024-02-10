<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LoginSystem</title>
</head>
<body>
    <h1>Login Sytem</h1>
        <ul>
        <li><a href="http://localhost/Root%20Folder%20of%20PHP%20Practise/1.Procedual%20PHP/9.LoginSystem/1.FrontLoginFile.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Extra</a></li>
        </ul>
        <hr>

        <div>
            <?php
                if (isset($_SESSION['ID']))
                {//logout
                echo "<p> You are LogIn !!! </p>Welcome ".$_SESSION['NAME'];
                echo '
                    <form action="6.LogOut.php" method="POST">
                        <input type="submit" value="Log Out" name="logout">
                    </form>
                    ';
                }
                else
                {//login    
                    if (isset($_GET['Signup']))//create account successfully msg from 3.ActionCreateAccount.php
                    {
                        if( $_GET['Signup'] == "Success" )
                        {
                            echo "<p> Your account is Signup successfully !</p>";
                        }
                    }
                    else if (isset($_GET['error']))//error msg from 4.LogIn.php
                    {
                        if( $_GET['error'] == "Incorrect_Password" )
                        {
                            echo "<p> Password Incorrect !</p>";
                        }
                        if( $_GET['error'] == "No_Account" )
                        {
                            echo "<p> You have no account !</p>";
                        }
                    }
                    
                    else if (isset($_GET['msgg']))//logout msg from 6.LogOut.php
                    {
                        if( $_GET['msgg'] == "logout" )
                        {
                            echo "<p> You are Log Out !</p>";
                        }
                    }
                }
            ?>

            <form action="4.LogIn.php" method="post">
                Email : <input type="email" placeholder="Email" name="email"><br>
                Password : <input type="password" placeholder="Password" name="password"><br>
                <input type="submit" value="Log In" name="buttonlogin">
            </form>  
            <hr>
            <a href="2.CreateAccount.php">Create Account</a>
        </div>

</body>
</html>