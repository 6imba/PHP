<?php
    if(isset($_POST["login"])){
        $con = mysqli_connect('localhost', 'root', '', 'php');
        if(!$con){
            echo "Connection Failed !";
        }
        else{

            $email = $_POST["email"];
            $password = $_POST["password"];
            $role = $_POST["role"];

            if($_POST["role"] = 'manager'){
                $sql = "SELECT * FROM manager WHERE username = '$username' ";
                $statement = mysqli_prepare($con,$sql);
            }
            elseif($_POST["role"] = 'agent'){
                $sql = "SELECT * FROM agents";
                $statement = mysqli_prepare($con,$sql);
            }
        //     $sql = "SELECT email, password, FROM MyGuests";            $statement = mysqli_prepare($con,$sql);
        //     mysqli_stmt_bind_param($statement,'sssssssss',$name, $age, $gender, $p_addrs, $t_addrs, $contact, $email, $password, $c_password);
        //     if(mysqli_stmt_execute($statement)){
        //         <script>alert("Successfully Inserted !")</script>
        //         mysqli_close($con);
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Role Base LogIn</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <form action="#" method="post" style="border: solid-black 2px; margin-top: 20px;">
                <label for="email">Email : </label>
                <input type="email" name="email">
                <br>
                <label for="password">Password : </label>
                <input type="password" name="name">
                <br>
                <label for="role">Role : </label>
                <input type="radio" name="role" value="manager">&nbsp;Manager  |
                <input type="radio" name="role" value="agent">&nbsp;Agent  |
                <br>
                <input type="login" name="submit">
            </form>
        </div>
    </div>
</body>

</html>