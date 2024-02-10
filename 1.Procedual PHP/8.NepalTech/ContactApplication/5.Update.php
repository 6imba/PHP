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
    <h2>Update Contact</h2>

    <?php
        include '1.DatabaseConnection.php';
        $id = $_GET['id_pass'];//if u open directly not coming from update button in 1.Frontpage.page it will not define id index so u can use isset function
        $sql = "SELECT * FROM contactperssonal WHERE id = ".$id;//this line ???
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $row = mysqli_fetch_assoc($result);
            $contactname = $row['name'];//index is column name from database
            $contactphone = $row['phone']; 
        }
    ?>

    <!-- Form -->
    <form action="6.Action.Update.php" method="POST"  class="p-3 mb-2 bg-dark text-white">
    <div class="main">
        <label for="name">Name:</label>
        <input type="text" name="name1" id="name" value="<?php echo $contactname ?>" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone1" id="phone" value="<?php echo $contactphone ?>" required>
        <br>
        <input  type="hidden" name ="id1" id="" value="<?php echo $id ?>" required><!--//we need to send id value through name attribute to action page but should not be printed in this page so hidden-->
        <input type="submit" name="updatebutton" value="Update"/>  <!--when u click this button action="6.Action.Update.php" takes place as the data will be transfer to another page 6.Action.Update.php -->
    </div>
    </form>
    <?php //check weather update button pressed or not 
        if (!isset($_POST["updatebutton"]))
        {
            echo "<p style='color:blue;'>Click Update button to save update !</p>";
        }
    ?>
    <hr>
    </body>
</html>


<!-- <body>
    <header>
    <h1>SimbA Contact</h1>
    </header>
    <h2>Update Contact</h2>
-->

    <?php
        // include '1.DatabaseConnection.php';
        // $id = $_GET['id'];//if u open directly not coming from update button in 1.Frontpage.page it will not define id index so u can use isset function
        // $contactname=$_GET['name'];//these are send by herf
        // $contactphone=$_GET['phone'];
    ?>

    <!-- Form -->
    <!-- <form action="6.Action.Update.php" method="post">
    <div class="main">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php //echo $contactname ?>" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" id="phone" value="<?php //echo $contactphone ?>" required>
        <br>
        <input  type="hidden" name ="iidd" id="" value="<?php //echo $id ?>" required>//we need to send id value through name attribute to action page but should not be printed in this page so hidden-->
        <!-- <input type="submit" value="Update">  when u click this button action="6.Action.Update.php" takes place as the data will be transfer to another page 6.Action.Update.php -->
    <!-- </div>
    </form>
    <hr>
</body>  --> 


