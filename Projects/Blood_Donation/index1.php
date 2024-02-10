<?php
session_start();
if (isset($_SESSION['role'])) {
  header("Location:includes/dashboard/" . $_SESSION['role'] . "Dash.php"); //login
  exit();
} else if (isset($_POST["login"])) {
  $con = mysqli_connect('localhost', 'root', '', 'blood_donation');
  if (!$con) {
    echo "Connection Failed !";
  } else {

    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $sql = "SELECT * FROM role WHERE role = ? AND email=? ";
    $statement = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($statement, $sql)) {
      header("index1.php?error==>sql error");
      exit();
    } else {
      mysqli_stmt_bind_param($statement, "ss", $role, $email);
      mysqli_stmt_execute($statement);
      $result = mysqli_stmt_get_result($statement);
      if ($row = mysqli_fetch_assoc($result)) {
        if ($password != $row['password']) {
          header("Location:index1.php?error=Incorrect_Password");
          exit();
        } else if ($password == $row['password']) {
          // session_start();//session started
          $_SESSION['role'] = $row['role'];
          $_SESSION['id'] = $row['id'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['name'] = $row['name'];
          header("Location:includes/dashboard/" . $_SESSION['role'] . "Dash.php"); //login
          exit();
        }
      } else {
        echo "what??";
      }
    }
  }
}


include_once "includes/head.php";
include "model/database.php";
include_once "includes/login.php";
include_once "includes/signup.php";
?>


<div class="container">

  <!-- Crousel -->
  <center>
    <div style="width: 70%; margin: 120px 0px 70px 0px">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/ragat5.jpeg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
          <div class="carousel-item">
            <img src="img/ragat2.jpg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
          <div class="carousel-item">
            <img src="img/ragat3.jpg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
          <div class="carousel-item">
            <img src="img/ragat4.jpg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
          <div class="carousel-item">
            <img src="img/ragat1.jpg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
          <div class="carousel-item">
            <img src="img/ragat6.jpg" class="d-block w-100" alt="..." width="500" height="250">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </center>

  <!-- Search_Bar -->
  <center>
    <form>
      <label for="blood_group" class="text-light">Blood Group : </label>
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
      <div style="margin: 25px 0px 25px;">
        <label for="location" class="text-light">Location : </label>
        <input name="location" type="search" placeholder="Location" aria-label="Search" size="25">
      </div>
      <div style="margin: 25px 0px 25px;">
      <a href="#doner_list" style="color:white; text-decoration:none"><button type="submit" class="btn btn-success">Search</button></a> <!-- remove href underline and blue color into white text> -->
      </div>
    </form>
  </center>

</div>



<!-- Donner_list -->
<a name="doner_list">
  <center>
    <h2 style="color:azure; margin: 120px 0px 0px; padding: 90px 0px 30px;">Donner List</h2>
  </center>
  <center>
    <div class="container table-responsive bg-dark" style="margin-bottom: 120px; height: 400px;">
      <?php include "includes/list.php" ?>
    </div>
  </center>
</a>




<?php include_once "includes/foot.php"; ?>