<?php
session_start();
include '1.database.php';

//Entry only if Log In Logic
if (isset($_SESSION['ID'])) {

    // LogOut Logic
    if (isset($_POST['logout'])) {
        session_start(); //session start
        session_unset(); //clear session
        session_destroy(); //destroy session
        header("Location:2.login.php?msgg=logout");
        exit();
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>DashBoard</title>
    </head>

    <body>
        <h1>You are logged in !</h1>
        <h2>Doner List</h2>

        <!-- Show Doner Table List Logic-->
        <?php
        $sql = "SELECT * FROM doner";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>

            <table style="border: 2px solid black;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Lastly_Donated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <th scope="row"> <?php echo $row['name'] ?> </th>
                            <td> <?php echo $row['bloodgroup'] ?> </td>
                            <td> <?php echo $row['address'] ?> </td>
                            <td> <?php echo $row['age'] ?> </td>
                            <td> <?php echo $row['gender'] ?> </td>
                            <td> <?php echo $row['lastly_donated'] ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>

        <!-- Add New Doner Logic -->
        <?php

        if (isset($_POST["adddoner"])) {

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
                echo '<script>alert(" Inserted Sucessfully !");</script>';
            } else {
                echo "<br> Error while insertion !";
            }
        }
        ?>

        <h1>Add Doner</h1>
        <!-- Add New Doner Form -->
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
            <button name="adddoner" type="submit" class="btn btn-primary">Add</button>
        </form>





        <br>
        <form method="POST">
            <input name="logout" type="submit" value="Log Out" name="logout">
        </form>


    </body>

    </html>


<?php

} else {
    echo "Yoy have to login first !";
}

?>