<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="sttyle.css">
    <title>Contact Application</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
    <header>
    <h1>SimbA Contact</h1>
    </header>
    <!-- Form -->
    <form action="3.ActionOfFrontpage.php" method="post"  class="p-3 mb-2 bg-dark text-white">
    <div >
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" id="phone" required>
        <br>
        <input type="submit" value="Save" name="button">  <!--when u click this button action="3.ActionOfFrontpage.php" takes place as the data will be transfer to another file 3.ActionOfFrontpage.php -->
    </div>
    </form>
    <hr>
    
    <!-- Table -->
    <!-- line1 open-->
    <h2>Contact List</h2>
    <table class="table table-striped">
    <thead class="thead-dark">
    <tr>
    <th>Id.</th>
    <th>Name</th>
    <th>PhoneNo.</th>
    <th>Action</th>
    </tr>
    </thead>

    <?php
    include '1.DatabaseConnection.php';//help to include all the parameters of another file named as 1.DatabaseConnection.php in this 2.FrontPage.php file  and use them and access to database(php)...........
    $sql = "SELECT * FROM contactperssonal;";// table_name (contactperssonal) of database (php)...........
    $result = mysqli_query($conn,$sql);//[mysqli_query()] ==> phpfunction performs a query against a database.//$conn access from 1.DatabaseEntey.php file
    if ($result)//if ($result is true/connection is done)//cheack if connection is done or not
      {
          while($row = mysqli_fetch_assoc($result))//mysqli_fetch_assoc() ==> phpfunction that  fetches a result row as an associative array. Fetches the table  row where table detial is hold by result
          {   // gather form data
              $id = $row['id'];
              $name = $row['name'];
              $phone = $row['phone'];//here 'id','name'and'phone' are the column_name of of table_name (contactperssonal) of database (php.contact)...........
    ?>

    <tr>
    <td> <?php echo $id ?></td>
    <td> <?php echo $name ?></td>
    <td> <?php echo $phone ?></td>
    <td>
        <a href="5.Update.php?id_pass=<?php echo $id?>">Update</a>  <!--(?id=?php echo $id?> what does this relly mean???) may be this code send id=sothing echo to another href file and another file gets it by get method .................-->
        <!-- <a href="5.Update.php?id=<?php //echo $id?>&name=<?php //echo $name ?>&phone=<?php //echo $phone ?>">Update</a> //also can try this --> 
        <a href="4.Delete.php?id_pass=<?php echo $id?>">Delete</a>

    </td>
    </tr> 
    <?php
          }
      }
    ?>
    
    </table>
<!-- line1 close-->
<!-- line1 is reponsible to echo list of perssonel in database-->


</body>
</html>


