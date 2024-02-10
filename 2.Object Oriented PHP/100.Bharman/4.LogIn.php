<?php

$dsn = "mysql:host='localhost'; dbname= 'php'";//data_source_name(descride type_of_data, type_of_host, database_name)
$pdo = new PDO($dsn, "root", "");//pdo_connection
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//optional : PDO error mode to exception
        
if (isset($_POST['buttonlogin']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];

    if(empty($email) || empty($password)){
        header("Location:3.index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM funday WHERE email=?;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $results = $stmt->fetchAll();
        var_dump($results);
    }
}
else{
    header("Location:3.index.php");
    exit();
}
