<?php
    require "1.FrontLoginFile.php";//we require "1.FrontLoginFile.php" to print error that has been passed in "1.FrontLoginFile.php"
?>
 
    <h1>Sign Up</h1>
    <?php
        if (isset($_GET['error']))//print error
        {
            if( $_GET['error'] == "empty" )
            {
                echo "<p> Fill Up all Datas !</p>";
            }
            if( $_GET['error'] == "invalid_Email and Invali_UserName" )
            {
                echo "<p> Invalid Pattern of Email and UserName !</p>";
            }
            if( $_GET['error'] == "Invalid_Username" )
            {
                echo "<p> Invalid character in Username !</p>";
            }
            if( $_GET['error'] == "invalid_Email" )
            {
                echo "<p> Invalid email pattern !</p>";
            }
            if( $_GET['error'] == "Passwords_Unmatch" )
            {
                echo "<p> Repeated_Password is not matched !</p>";
            }
        }
    ?>

    <form action="3.ActionCreateAccount.php" method="post">
        Username : <input type="text" placeholder="Username" name="username1" value="<?php if (isset($_GET['UidName'])) { echo $_GET['UidName'];} ?>" ><br>
        Email : <input type="email" placeholder="Email" name="useremail1" value="<?php if (isset($_GET['UidEmail'])) { echo $_GET['UidEmail'];} ?>" ><br>
        Password : <input type="password" placeholder="Password" name="userpassword1"><br>
        Repeat Password : <input type="password" placeholder="Password" name="repeatpassword1"><br>
        <input type="submit" value="Submit" name="createact1">
    </form> 
