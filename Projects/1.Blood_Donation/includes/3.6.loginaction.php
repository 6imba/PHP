<?php

if (isset($_POST["login"])) {
  include "1.database.php";
  if (!$conn) {
    echo "Connection Failed !";
  } else {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM role WHERE email=? ";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
      header("index1.php?error==>sql error");
      exit();
    } else {
      mysqli_stmt_bind_param($statement, "s", $email);
      mysqli_stmt_execute($statement);
      $result = mysqli_stmt_get_result($statement);
      if ($row = mysqli_fetch_assoc($result)) {
        if ($password != $row['password']) {
          header("Location:index1.php?error=Incorrect_Password");
          exit();
        } else if ($password == $row['password']) {
          session_start();//session started
          $_SESSION['role'] = $row['role'];
          $_SESSION['id'] = $row['id'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['name'] = $row['name'];
          header("Location:dashboard/7." . $_SESSION['role'] . "Dash.php"); //login
          exit();
        }
      }
    }
  }
}

?>