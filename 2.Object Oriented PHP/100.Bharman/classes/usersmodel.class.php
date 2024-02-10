<!-- only class that interact with database -->
<!-- task : handles database interaction -->

<?php

class UsersModel extends Dbh{

    //get/fetch selective_user_derials
    protected function getUser($email1){
        $sql = "SELECT * FROM funday WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email1]);
        $results = $stmt->fetchAll();
        return $results;
    }

    //set/insert a new user_derials
    protected function InsertUser($name, $email, $hashpassword){
        $sql = "INSERT INTO funday (name,email,password) values(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        if($stmt->execute([$name, $email, $hashpassword])){
            return true;
        }
    }

    // login into database
    protected function login1($email, $password){
        $sql="SELECT * FROM funday WHERE email=?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email1]);
        $results = $stmt->fetchAll();
        $passcheck = password_verify($password,$row['password']);
        if ($passcheck == false)
            {
                header("Location:3.index.php?error=Incorrect_Password");
                exit();
            }
        else if ($passcheck == true)
            {
                session_start();//session started
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['status'] = $row['status'];
                header("Location:login.php?mail=".$_SESSION['email']);//login
                exit();
            }
    }

}

?>