<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>User View</title>
    <link rel="stylesheet" href="http://localhost/RootPHP/MVC/MVC_Framework_8/public/assets/css/style.css">
</head>
<body>

    <h1>Form</h1>
    <form action="http://localhost/RootPHP/MVC/MVC_Framework_8/apps/controllers/userController.php/signup" method="POST"> <!-- action = absolute path controller -->
        <input type="text" name= "name" placeholder="Enter Name"><br>
        <input type="email" name= "email" placeholder="Enter Email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" value="Register"><br>
    </form>
    
</body>
</html> 