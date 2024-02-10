<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}


// prepare and bind
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)";
$statement = mysqli_stmt_init($conn);
mysqli_stmt_prepare($statement,$sql);
mysqli_stmt_bind_param($statement,"sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
mysqli_stmt_execute($statement);

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
mysqli_stmt_execute($statement);

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
mysqli_stmt_execute($statement);

echo "New records created successfully";

mysqli_stmt_close($statement);
mysqli_close($conn);
?>










<?php 
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // prepare and bind
// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// // set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();
// ?> 