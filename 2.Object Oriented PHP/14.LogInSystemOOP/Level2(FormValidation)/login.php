<?php include "init.php"; ?>
<?php 
    if(isset($_SESSION['id'])){ header("location:profile.php");}//if already loged in goto profile.php
?>
<?php

if(isset($_POST['login'])){
    $data = [
            'email' => $_POST['email'],
            'password' => $_POST['email'],
            'email_error' => '',
            'password_error' => '',
            ];

if(empty($data['email'])){
    $data['email_error'] = 'Email is required !';
}

if(empty($data['password'])){
    $data['password_error'] = 'Password is required !';
}

if(empty($data['email_error'] && $data['password_error'])){
    if($source_obj->Query("SELECT * FROM opplogin WHERE email=?", [$data['email']])){
        if($source_obj->CountRows() > 0){
            $row = $source_obj->Single();
            $id = $row->id;
            $name = $row->name;
            $db_password = $row->password;
            echo $db_password;
            // $password = password_hash($data['password'], PASSWORD_DEFAULT);
            if(password_verify($data['password'], $db_password)){
                $_SESSION['login_success'] = "Hi ".$name.". You are succesfully Loged In ! ";
                $_SESSION['id'] = $id;
                header("location:profile.php");
            }else{
                $data['password_error'] = 'Invalid Password !';
            }
        }else{
            $data['email_error'] = "Please valid email !";
        }
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
         <?php
            if(isset($_SESSION['account_created'])):?> <!-- watch if statement -->
                <div class="success">
                <?php echo $_SESSION['account_created'];?>
                <div>
            <?php endif;  ?>
            <?php unset($_SESSION['account_created']);  ?>
            

     </div>
     <div class="group">
      <h3 class="heading">User Login</h3>
     </div>
     <div class="group">
      <input type="email" name="email" class="control" placeholder="Enter Email.." value="<?php if(!empty($data['email'])){ echo $data['email'];} ?>">
      <div class="error">
        <?php if(!empty($data['email_error'])): ?>
        <?php echo $data['email_error'] ?>
        <?php endif; ?>
      </div>
     </div>
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password..." value="<?php if(!empty($data['password'])){ echo $data['password'];} ?>">
      <div class="error">
        <?php if(!empty($data['password_error'])): ?>
        <?php echo $data['password_error'] ?>
        <?php endif; ?>
      </div>
     </div>
 
     <div class="group m20">
      <input type="submit" name="login" class="btn" value="Login &rarr;">
     </div>
     <div class="group m20">
      <a href="index1.php" class="link">Create new account ?</a>
     </div>
    </form>
   </div>
  </div>
 </div>


</body>
</html>