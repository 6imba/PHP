<?php

include '../model/database.php';

if (isset($_POST["submitbtn"])) {

    $name = $_POST["name"];
    $blood_group = $_POST["blood_group"];
    $district = $_POST["district"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $last_donated = $_POST["last_donated"];
    $contact = $_POST["contact"];
    $detial = $_POST["detial"];

    $sql = "INSERT INTO doner (name, bloodgroup, district,  address, age, gender, lastly_donated, contact, detial) values('$name' ,'$blood_group' ,'$district' ,'$address' ,'$age' ,'$gender' ,'$last_donated' ,'$contact' ,'$detial' );";

    $result = mysqli_query($conn, $sql);
    if ($result) // check number of data/row in $result hold by $checkresult after query into database 
    {
        // echo '<script>alert(" Inserted Sucessfully !");</script>';
        header("Location:DashBoard.php?msg=Inserted Sucessfully ");//login

    } else {
        echo "<br> Error while insertion !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Add Doner</h1>

    <form method="post">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td> : </td>
                <td><input name="name" type="name"></td>
            </tr>
            <tr>
                <td><label for="blood_group">Blood Group</label></td>
                <td> : </td>
                <td><select name="blood_group" id="blood_group">
                        <option value="A-" selected>A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="district">District</label></td>
                <td> : </td>
                <td><input name="district" type="name" class="form-control" id=""></td>
            </tr>
            <tr>
                <td><label for="address">Address</label></td>
                <td> : </td>
                <td><input name="address" type="name" class="form-control" id=""></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td> : </td>
                <td><input name="age" type="name" class="form-control" id=""></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td> : </td>
                <td><select name="gender" name="gender" id="gender">
                        <option value="">Male</option>
                        <option value="">Felame</option>
                        <option value="">Other</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="last_donated">LastlDonateDate</label></td>
                <td> : </td>
                <td><input name="last_donated" type="date" class="form-control" id=""></td>
            </tr>
            <tr>
                <td><label for="contact">Contact</label></td>
                <td> : </td>
                <td><input name="contact" type="name" class="form-control" id=""></td>
            </tr>
            <tr>
                <td><label for="detial">Detial</label></td>
                <td> : </td>
                <td><input name="detial" type="name" class="form-control" id=""></td>
            </tr>
        </table>
        <button name="submitbtn" type="submit" class="btn btn-primary">Add</button>
    </form>

</body>

</html>