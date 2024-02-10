<?php
        session_start();
        $a="kanxa@gmail.com";
            if (isset($_SESSION['email'])==$a)
            {
                echo "<p> You are LogIn !!! </p>"; 
                header("Location:10.kanxablog.php?::LogIn_SUCCESS.....");
            }
    ?>