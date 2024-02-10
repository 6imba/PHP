<?php
    if(isset($_POST["register"])){
        $con = mysqli_connect('localhost', 'root', '', 'php');
        if(!$con){
            echo "Connection Failed !";
        }
        else{
            $name = $_POST["name"];
            $age = $_POST["age"];
            $gender = $_POST["gender"];
            $p_addrs = $_POST["per_add"];
            $t_addrs = $_POST["temp_add"];
            $contact = $_POST["phone"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $c_password = $_POST["confirm_pass"];

            $sql= "INSERT INTO Agents (name, age, gender, p_address, t_address,	phone, email, password, confirm_pass) VALUES (?,?,?,?,?,?,?,?,?);" ;
            $statement = mysqli_prepare($con,$sql);
            mysqli_stmt_bind_param($statement,'sssssssss',$name, $age, $gender, $p_addrs, $t_addrs, $contact, $email, $password, $c_password);
            if(mysqli_stmt_execute($statement)){
?>
                <script>alert("Successfully Inserted !")</script>
<?php
                mysqli_close($con);
            }
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

    <title>Add New Agent</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Add New Agent</h1>
        </div>
        <div class="row justify-content-center">
            <form action="#" method="post" style="border: solid-black 2px; margin-top: 20px;">
                <label for="name">Name : </label>
                <input type="name" name="name">
                <br>
                <label for="age">Age : </label>
                <input type="number" name="age">
                <br>
                <label for="gender">Gender : </label>
                <input type="radio" name="gender" value="male">&nbsp;Male |
                <input type="radio" name="gender" value="female">&nbsp;Female
                <input type="radio" name="gender" value="other">&nbsp;Other
                <br>
                <label for="per_add">Permanent Address : </label>
                <input type="address" name="per_add">
                <br>
                <label for="temp_add">Temporary Address : </label>
                <input type="address" name="temp_add">
                <br>
                <label for="phone">Contact : </label>
                <input type="tel" name="phone">
                <br>
                <label for="email">Email : </label>
                <input type="email" name="email">
                <br>
                <label for="password">Password : </label>
                <input type="password" name="password">
                <br>
                <label for="password">Confirm Password : </label>
                <input type="password" name="confirm_pass">
                <br>
                
                <input type="register" name="submit">
            </form>
        </div>
    </div>
</body>

</html>