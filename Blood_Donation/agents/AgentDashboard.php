<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <h1>Agent Dashboard</h1>

<h2>Add Doner</h2>
    <form method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group : </label>
            <select name="blood_group" id="blood_group">
                <option value="A-" selected>A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="district" class="form-label">District : </label>
            <input name="district" type="name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address : </label>
            <input name="address" type="name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age : </label>
            <input name="age" type="name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender : </label>
            <select name="gender" name="gender" id="gender">
                <option value="">Male</option>
                <option value="">Felame</option>
                <option value="">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="last_donated" class="form-label">LastlDonateDate : </label>
            <input name="last_donated" type="date" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact : </label>
            <input name="contact" type="name" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="detial" class="form-label">Detial : </label>
            <input name="detial" type="name" class="form-control" id="">
        </div>
        <button name="submitbtn" type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'blood_donation';

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name)  or die();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM doner";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    ?>
    <h2>Doner List</h2>
        <table class="table table-dark table-hover">
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
    } else {
        echo "No results";
    }

    mysqli_close($conn);
    ?>



</body>

</html>