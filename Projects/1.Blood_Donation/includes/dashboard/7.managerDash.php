<?php
session_start();
if (isset($_SESSION['id'])) {

    include "../1.database.php";

    if (isset($_POST["agent_add"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $contact = $_POST["contact"];


        $sql = "INSERT INTO role (role, name ,email ,contact ,password ) VALUES('agent',?,?,?,?);";
        $statement = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($statement,$sql))
        {
            header("Location:7.managerDash.php?error::Sql_Connection_Fail");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($statement, "ssss", $name, $email, $contact, $password);
            mysqli_stmt_execute($statement);
            header("Location:7.managerDash.php?Signup=Success");
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
    </head>

    <body>
        <h1>Manager DashBoard</h1>


        <!-- Show Agent List Logic-->
        <h2>Agent List</h2>
        <?php
        $sql = "SELECT * FROM role";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        ?>

            <div class="show">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"> <?php echo $row['name'] ?> </th>
                                <td> <?php echo $row['email'] ?> </td>
                                <td> <?php echo $row['contact'] ?> </td>
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



        <h2>Add Agents</h2>
        <form method="post" action="7.managerDash.php">
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td> : </td>
                    <td><input name="name" type="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td> : </td>
                    <td><input name="email" type="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td> : </td>
                    <td><input name="password" type="password"></td>
                </tr>
                <tr>
                    <td><label for="confirm_password">Confirm Password</label></td>
                    <td> : </td>
                    <td><input name="confirm_password" type="confirm_password"></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact</label></td>
                    <td> : </td>
                    <td><input name="contact" type="contact"></td>
                </tr>
            </table>
            <button name="agent_add" type="submit" class="btn btn-primary">Add</button>
        </form>

        <br>

        <a href="../8.logout.php"><button>LogOut</button></a>
    </body>

    </html>

<?php
} else {
    echo "LogIn Your Role First !";
}
?>