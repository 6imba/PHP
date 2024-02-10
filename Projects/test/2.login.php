<?php
session_start();
require '1.database.php';

// If not Loged Out DashBoard appearing Logic
if (isset($_SESSION['ID'])) {
  header("Location:4.DashBoard.php?LohIn_Successful!");
} else {

  // 2.LogIn Logic
  if (isset($_POST['loginbtn'])) {
    $usermail = $_POST['email'];
    $userpwd = $_POST['password'];

    if (empty($usermail) || empty($userpwd)) {
      header("Location:2.login.php?error=empty_feilds");
      exit();
    } else {
      $sql = "SELECT * FROM agent WHERE email=?;";
      $statement = mysqli_stmt_init($conn); //create new prepare statement//(initialize this new prepare statement by refering to connection'$conn' that we have in DBconn.php)//initialize statement//initialize with correct connection...//new connection
      if (!mysqli_stmt_prepare($statement, $sql)) //prepare/make ready prepare statement//now we want to run the sql statement and at the same time check if it does actually work at the database.....if it doesnt work error ,here only check if $sql works with database it doesnt check we have got result from db.... so we need to fetch data like in line 21 
      {
        header("Location:2.login.php?error==>sql error");
        exit();
      } else {
        mysqli_stmt_bind_param($statement, "s", $usermail); //passing parameter from the user into db and see if can get the result from the above sql statement...
        mysqli_stmt_execute($statement); //execute all statement 
        $result = mysqli_stmt_get_result($statement); //after execution all data is stored in $result from $statement...
        if ($row = mysqli_fetch_assoc($result)) {
          if ($userpwd != $row['password']) {
            header("Location:2.login.php?error=Incorrect_Password");
            exit();
          } else {
            session_start(); //session started
            $_SESSION['ID'] = $row['id']; //session variable define
            $_SESSION['NAME'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['img'] = $row['img'];
            $_SESSION['contact'] = $row['contact'];
            $_SESSION['FB'] = $row['fb_link'];
            header("Location:3.ProfileMover.php?mail=" . $_SESSION['email']); //go to respective login profile
            exit();
          }
        }
      }
    }
  }


?>

  <!-- 1.LogIn Form -->
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <h5>Member LogIn</h5>
    <form method="post">
      <label for="email">Email address : </label>
      <input name="email" type="email"><br>
      <label for="password">Password : </label>
      <input name="password" type="password"><br>
      <button name="loginbtn" type="submit">LogIn</button>
    </form>
  </body>

  </html>

<?php
}
?>