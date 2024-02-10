<?php
//if already login take to that account dashboard
session_start();
if (isset($_SESSION['id'])) {
  header("Location:includes/dashboard/" . $_SESSION['role'] . "Dash.php"); //login
  exit();
}
include "includes/1.database.php";
include_once "includes/4.head.php";
include_once "includes/5.login.php";
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
        <button type="submit" class="btn btn-success">Search</button> <!-- remove href underline and blue color into white text> -->
      </div>
    </form>
  </center>

</div>



<?php include_once "includes/foot.php"; ?>