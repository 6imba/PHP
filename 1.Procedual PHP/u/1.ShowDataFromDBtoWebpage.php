<!-- show data in web page from database...................  -->

<?php
    include "DatabaseConnectionFile.php";//php statement/ function (include) helps existing file (1.ShowDataFromDBtoWebpage.php) to link with other file (DatabaseConnectionFile.php)
                                         //Therefore now we can access anything from other file (DatabaseConnectionFile.php) in this existing file (1.ShowDataFromDBtoWebpage.php) as (DatabaseConnectionFile.php) is included
                                         //where (DatabaseConnectionFile.php) is connected to database ("php&database") therefore we can access to database("php&database") from this file also...........
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ShowDataFromDB</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php  
    echo "Hello php".'<br>'.'<br>'; //note : if below table name mistak echo $row will not show also no error will show
        $sql = "SELECT * FROM userstable;";//sql statement hold by variable $sql
        $result = mysqli_query($conn,$sql);//quering (to do something inside and return something from the database)
                 //first parameter $conn will make the connection and second parameter will run sql query
                 //variable ($conn) accessed from other file (DatabaseConnectionFile.php) that connects to database
                
        if($result)//check if condition $result is true/connection done
        {
           while($row = mysqli_fetch_assoc($result))//mysqli_fetch_assoc() ==> phpfunction that  fetches a result row of database as an associative array. ie fetches all row of table hold by $result.
           {
               echo "Id : "        .$row['id'].'<br>';
               echo "FirstName : " .$row['fname'].'<br>';
               echo "LastName : "  .$row['lname'].'<br>';
               echo "Email : "     .$row['email'].'<br>';
               echo "User_Id : "   .$row['u_id'].'<br>';
               echo "User_Pass : " .$row['u_pass'].'<br>'.'<br>';
               //here $row['indexname'] is a associative array holding value/data of table after fetching.here index name is column name of table in database...
            } 
        }
        
    ?>
        
    <?php  
    echo '<br><br><br>';
    echo "Hello another php<br>";
    $aaa = "SELECT * FROM userstable WHERE id = 2;";
        $result = mysqli_query($conn,$aaa);//we can call $result from upper php but here we have stored sql query in $aaa but in upper php we have stored in $sql so now $result has new defination and upper defination is no longer exist 
        if($result)
        {
           while($bbb = mysqli_fetch_assoc($result)) 
           { 
            echo "FirstName : " .$bbb['fname'].'<br>';
            echo "LastName : "  .$bbb['lname'].'<br>'.'<br>';
            } 
        }
        
    ?>

</body>
</html>



