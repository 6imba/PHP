 <?php 
 include "init.php"; 
 if(isset($_POST['signup'])){//cheack if "signup" button is pressed or not?
  $data = [//strore data_values submmited from form into data_array
          'name' => $_POST['full_name'],
          'email' => $_POST['email'],
          'password' => $_POST['password'],
          'confirm_password' => $_POST['confirm'],
          'name_error' => '',
          'email_error' => '',
          'password_error' => '',
          'confirm_error' => '',
  ];

  //Form_Validation & Check and Set error
  //Name_Validation
  if(empty($data['name'])){
    $data['name_error'] = "Name is Required !";
  }

  //Email_Validation
  if(empty($data['email'])){
    $data['email_error'] = "Email is Required !";
  }else{
    if($source_obj->Query("SELECT * FROM opplogin WHERE email=?", [$data['email']])){ //source_obj is object of Source class inside Source.php
      if($source_obj->CountRows() > 0){
        $data['email_error'] = "Sorry, this Email already exist !";
      }
    }
  }

  //Password_Validation
  if(empty($data['password'])){
    $data['password_error'] = "Password is required !";
  }else if(strlen($data['password']) < 8){
    $data['password_error'] = "Minimun 8 character Password is required !";
  }

  //Confire_Password_Validation
  if(empty($data['confirm_password'])){
    $data['confirm_error'] = "Confirm Password is required !";
  }else if($data['password'] != $data['confirm_password']){
    $data['confirm_error'] = "Password and Confirm Password doenot match !";
  }

  //Data_Insertion_Into_Database
  if(empty($data['name_error']) && empty($data['email_error']) && empty($data['password_error']) && empty($data['confirm_error'])){
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    if($source_obj->Query("INSERT INTO users (name,email,password) VALUES (?,?,?)", [$data['name'], $data['email'], $password])){
      $_SESSION['account_created'] = "Your account is successfully created";
      header("location:login.php");
    }
  }

 }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Singup Form</title>
 <link rel="stylesheet" href="assets/css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
</head>
<body>

 <div class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="POST">
     <div class="group">
      <h3 class="heading">Create account</h3>
     </div>
     <div class="group">
      <input type="text" name="full_name" class="control" placeholder="Enter Name..." value="<?php if(!empty($data['name'])): echo $data['name']; endif;?>">
      <div class="error">
        <?php if(!empty($data['name_error'])): ?>
          <?php echo $data['name_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="email" name="email" class="control" placeholder="Enter Email.." value="<?php if(!empty($data['email'])): echo $data['email']; endif; ?>">
      <div class="error">
        <?php if(!empty($data['email_error'])): ?>
          <?php echo $data['email_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password..." value="<?php if(!empty($data['password'])): echo $data['password']; endif; ?>">
      <div class="error">
        <?php if(!empty($data['password_error'])): ?>
          <?php echo $data['password_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="confirm" class="control" placeholder="Confirm Password..." value="<?php if(!empty($data['confirm_password'])): echo $data['confirm_password']; endif; ?>">
      <div class="error">
        <?php if(!empty($data['confirm_error'])): ?>
          <?php echo $data['confirm_error']; ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group m20">
      <input type="submit" name="signup" class="btn" value="Create account &rarr;">
     </div>
     <div class="group m20">
      <a href="login.php" class="link">Already have an account ?</a>
     </div>
    </form>
   </div>
  </div>
 </div>


</body>
</html>
