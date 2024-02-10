<?php

	$msg='';
	$msgClass='';

// chech whether form has been submitted
	if(filter_has_var(INPUT_POST, 'submit')){

		// gather from data
		$name = $_POST['name'];
		$id = $_POST['studentid'];
		// $message = $_POST['message'];

		// check if form fields are empty
		if (!empty($name) && !empty($id)) {
		}
		if (filter_var($id,FILTER_VALIDATE_EMAIL) ===false) {

			$msg = "please validate your email";
			$msgClass= "alert-danger";

		}
		else{
			$msg = "your email has been submitted";
			$msgClass = 'alert-success';
		}
		}
		else{
			$msg= 'please fill out all fields';
			$msgClass= 'alert-danger';
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Project Work</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="a.css">
</head>
<body>

	<div class="container">
 <div class="row">
    <div class="col">
      <img src="y.jpg" width="600">
    </div>
    <div class="col">
     
		<center><h1 class="wv-heading--title">
		   Student Registration Form
		</h1>
		<h2 class="wv-heading--subtitle">
		  
		</h2></center><br>
	
   <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Please Fill Your all Information</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->
  <div class="row">
<!-- 	 <div class="col-md-4 mx-auto">
 -->		<div class="myform form ">
		   <form action="" method="post" name="login">
			   <div class="form-row">
    <div class="form-group col-md-6">
<!--       <label for="inputEmail4">Student Name</label>
 -->      <input type="text" class="form-control" id="name" placeholder=" Student Name" required>
    </div>
    <div class="form-group col-md-6">
<!--       <label for="inputPassword4">Student ID</label>
 -->      <input type="text" class="form-control" id="studentid" placeholder="Student ID" required>
    </div>
  </div>
			  <div class="form-group">
				 <input type="text" min="0" name="Address" id="Address"  class="form-control my-input" placeholder="Address" required>
			  </div>
			  <div class="form-group">
    <label for="exampleFormControlSelect1">Faculty</label>
    <select class="form-control" id="faculty">
      <option>BIT</option>
      <option>BCS</option>
      <option>BBA</option>
      <option>MBA</option>
<!--       <option>5</option>
 -->    </select>
  </div>

  			<div class="form-group">
    <label for="exampleFormControlSelect1">Grade</label>
    <select class="form-control" id="grade">
      <option>1st sem</option>
      <option>2nd sem</option>
      <option>3rd sem</option>
      <option>4th sem</option>
      <option>5th sem</option>
      <option>6th sem</option>
<!--       <option>5</option>
 -->    </select>
  </div>
			  <div class="text-center ">
				 <button type="submit" id="submit" class=" btn btn-block send-button tx-tfm">Sign up</button>
			  </div>
			  <div class="col-md-12 ">
				 <div class="login-or">
					<hr class="hr-or">
					<span class="span-or">or</span>
				 </div>
			  </div>
			  <div class="form-group">
				 <a class="btn btn-block g-button" href="http://www.lincolnedu.education/" target="_blank">
				 <i class="fa fa-google"></i> Sign up with Lincoln Registration
				 </a>
			  </div>
			  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
			  </p>
			  
		   </form>
		</div>
	 </div>
</div>
  </div>








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>