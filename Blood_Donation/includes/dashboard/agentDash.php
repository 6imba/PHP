<?php
session_start();
if (isset($_SESSION['role'])) {

    include "../../model/database.php";

    if (isset($_POST["doner_add"])) {

        $name = $_POST["name"];
        $group = $_POST["group"];
        $p_address = $_POST["p_address"];
        $t_address = $_POST["t_address"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $last_donated = $_POST["last_donated"];
        $contact = $_POST["contact"];
        $discription = $_POST["discription"];



        // $sql = "INSERT INTO doner (name ,group ,p_address ,t_address ,age ,gender ,last_donated ,contact ,discription) VALUES(?,?,?,?,?,?,?,?,?);";
        // $statement = mysqli_stmt_init($conn);
        // if (!mysqli_stmt_prepare($statement,$sql))
        // {
        //     header("Location:agentDash.php?error::Sql_Connection_Fail");
        //     exit();
        // }
        // else
        // {
        //     mysqli_stmt_bind_param($statement,"sssssssss",$name ,$group ,$p_address ,$t_address ,$age ,$gender ,$last_donated ,$contact ,$discription );
        //     mysqli_stmt_execute($statement);
        //     header("Location:agentDash.php?Signup=Success");
        //     exit();
        // }




        // $sql = "INSERT INTO doner (name ,group ,p_address ) VALUES(?,?,?);";
        // $statement = mysqli_stmt_init($conn);
        // if (!mysqli_stmt_prepare($statement,$sql))
        // {
        //     header("Location:agentDash.php?error::Sql_Connection_Fail");
        //     exit();
        // }
        // else
        // {
        //     mysqli_stmt_bind_param($statement,"sss",$name ,$group ,$p_address );
        //     mysqli_stmt_execute($statement);
        //     header("Location:agentDash.php?Signup=Success");
        //     exit();
        // }



        $sql = "INSERT INTO doner (name, p_address, t_address, age, gender, last_donated, contact, discription) VALUES(?,?,?,?,?,?,?,?);";
        $statement = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location:agentDash.php?error::Sql_Connection_Fail");
            exit();
        } else {
            mysqli_stmt_bind_param($statement, "ssssssss", $name, $p_address, $t_address, $age, $gender, $last_donated, $contact, $discription);
            mysqli_stmt_execute($statement);
            header("Location:agentDash.php?Signup=Success");
            exit();
        }
    }



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DashBoard</title>
        <style>
            .show * { border: 1px solid black;} 
            
        </style>
    </head>

    <body>
        <h1>Agent DashBoard</h1>

        <h2>Doner List</h2>

        <!-- Show Doner Table List Logic-->
        <?php
        $sql = "SELECT * FROM doner";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>

            <div class="show">
            <table>
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
                            <td> <?php echo $row['group'] ?> </td>
                            <td> <?php echo $row['t_address'] ?> </td>
                            <td> <?php echo $row['age'] ?> </td>
                            <td> <?php echo $row['gender'] ?> </td>
                            <td> <?php echo $row['last_donated'] ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
        <?php
        }
        ?>

        <h2>Add Doner</h2>
        <form method="post">
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td> : </td>
                    <td><input name="name" type="name"></td>
                </tr>
                <tr>
                    <td><label for="group">Blood Group</label></td>
                    <td> : </td>
                    <td><select name="group" id="group">
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
                    <td><label for="p_address">Permanent Address</label></td>
                    <td> : </td>
                    <td><input name="p_address" type="name" class="form-control" id=""></td>
                </tr>
                <tr>
                    <td><label for="t_address">Temporary Address</label></td>
                    <td> : </td>
                    <td><input name="t_address" type="name" class="form-control" id=""></td>
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
                    <td><label for="discription">Description</label></td>
                    <td> : </td>
                    <td><input name="discription" type="name" class="form-control" id=""></td>
                </tr>
            </table>
            <button name="doner_add" type="submit" class="btn btn-primary">Add</button>
        </form>

        <br>
        <a href="../logout.php"><button>LogOut</button></a>

    </body>

    </html>

<?php
} else {
    echo "LogIn Your Role First !";
}
?>