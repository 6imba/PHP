<!-- Input data in form and tranfering it into the database through action="3.FormAction.InsertIntoDatabase.php" -->
<!-- we dont need [include "DatabaseConnectionFile.php";] in this front page as here we dont have any work to link with database but we need to include in another [action="3.FormAction.InsertIntoDatabase.php"] file to access database -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into database</title>
</head>
<body>
    <h1>Hello world DB data Entry</h1>
    <!-- ?php -->
        <!-- $sql = "INSERT into userstable (fname,lname,email,u_id,u_pass) values ('Under','Taker','taker33@gmail.com','admintaker','taker123');"; -->
        <!-- mysqli_query($conn,$sql);//quering no need variable as it works directly -->
        <!-- when u load this file web page all these value will be transfer into table named(userstable) && if u reload it agian it wil transfer the value.Means the number of times u reload the file same number of times data will be transfer also cant take input -->
        <!-- note : if and only include database connection above -->
    <!-- ?>  -->
    <!-- so lets try transfering data using form -->

    <form action="3.FormAction.InsertIntoDatabase.php" method="POST">
        <input  type="text"     name="fname"  id="" placeholder="FirstName" required><br>
        <input  type="text"     name="lname"  id="" placeholder="LastName"  required><br>
        <input  type="email"    name="email"  id="" placeholder="Email"     required><br>
        <input  type="text"     name="u_id"   id="" placeholder="User_Id"   required><br>
        <input  type="password" name="u_pass" id="" placeholder="Password"  required><br>
        <button type="submit"   name="submit"> Sign up </button>
    </form>
    <!-- note : if there no required attribute in form then it may transfer empty data into the batabase  e.g. id 16  -->
   
</body>
</html>