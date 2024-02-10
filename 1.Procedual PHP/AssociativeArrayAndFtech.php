<?php

class Dbh{
    private $host, $user, $password, $database;

    protected function connect(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'php';

        $conn = new mysqli($this->host, $this->user, $this->password, $this->database); //OOP style programming to Open a new connection to the MySQL server
        //here mysqli() is inbuilt_function in OOP_php that allows you to access MySQL database servers.
        //XAMPP provides MySQL database (actually MariaDB) service.
        //The new keyword is used to create an object/instance of/from a class.
        return $conn;//$conn is an object gettype($conn) that holds the connection with database
    }
}
class User extends Dbh{

    public function getAllUser(){
        $sql = "SELECT * FROM oop_php";//query_statement
        $result = $this->connect()->query($sql); 
        //here, $this->connect() is the protected_method of parentclass(Dbh) which return $conn(object that holds connection to database) 
        //&& mysqli_query() or query() is the inbuilt_function in oop_php that performs a query against a database.
        //&& query($sql=(select)) with object($conn) returns resources(selected_data from table)
        //&& variable $result is an object or holds an object with given query_value
        // $numbRows = $result->num_rows; //num_rows is the inbulit function of oop_php that gives number of rows in the object/result_set($result).
        // //Here current time i have 4,user in my database_table.So, echo $numbRows outputs 4;
        // if ($numbRows > 0){//check if object/result_set/table($result) contains any user_data/row
        //     $row = $result->fetch_assoc() //fetch_assoc() is the inbulit function of oop_php that Fetch a result_row hold by object($result) as an associative array.Here, we have stored fetched_array into variable($row). ARRAY OF ASSOCIATIVE ARRAY
        //     while($row){

        //     }
        // // }
        // $numbRows = $result->num_rows;
        // echo($numbRows).'<br>';
        // $row = $result->fetch_assoc();
        // echo gettype($row).'<br>';
        // print_r($result->fetch_assoc());
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $column => $value){
        //         echo '<br>'.$column.'has'.$value;
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user){
        //         echo '<br>'.$user['id'].'has'.$user['name'];
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //         foreach($row as $user){
        //             echo $user.'<br>';
        //         }
        //     }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $user.'<br>';
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $value.'<br>';
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $user.' '.$value.'<br>';
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $row[$user].'<br>';
        //     }
        // }
        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $user.' '.$value.'<br>';
        //     }
        // }

        // $number_row = $result->num_rows;//num_rows(function for object)
        // echo 'Number of rows : '.$number_row.'<br>'; 

        // $row = $result->fetch_assoc();//fetch_assoc(fucntion convert object to array)(function for object)
        // print_r($row);
        // echo '<br>';

        // $row = $result->fetch_assoc();//fetch_assoc once and print once feteched array
        // print_r($row);
        // echo '<br>';

        // //once you have fetched array that array is not avaiable again

        // $row = $result->fetch_assoc();//fetch_assoc once and print once feteched array
        // print_r($row);
        // echo '<br>';

        // $row = $result->fetch_assoc();//fetch_assoc once and print once feteched array
        // print_r($row);
        // echo '<br>';

        // $a = $row->fetch_assoc();
        // print_r($a);
    
        //once you have fetched array that array is not avaiable again
        //So, main array is $result;


        // $asoc_arr = 1;
        // while($row = $result->fetch_assoc()){ //fetch array till it is avaiable
        //     echo '<br>'.'<br>'.'asoc_arr (Row Number) : '.$asoc_arr.'<br>';
        //     foreach($row as $user => $value){
        //         echo $user.' : '.$value.'<br>';
        //     }$asoc_arr++;
        // }

        // while($row = $result->fetch_assoc()){
        //     foreach($row as $user => $value){
        //         echo $user.' : '.$value.'<br>';
        //     }
        // }

        $asoc_arr = 1;
        while($row = $result->fetch_assoc()){ //fetch array till it is avaiable
            echo '<br>'.'<br>'.'asoc_arr (Row Number) : '.$asoc_arr.'<br>';
            foreach($row as $column => $value){//here $result is object and after fetching object, array is fetch into $row. Now, array($row) holds Associative array 
                echo $column.' : '.$value.'<br>'; //echo key_paired_value of current associative array
            }$asoc_arr++;
        }
    }
}

$obj1 = new User();
$obj1->getAllUser();
?>




<!-- 
Fetch means to go to another place to get something or someone and return with the thing or the person.

 $row = $result->fetch_assoc();
        echo gettype($row).'<br>';
        print_r($row);
        foreach($row as $column => $value){
            echo '<br>'.$column.'has'.$value;

        }

output:
array
Array ( [PersonID] => 1 [Name] => Amir )
PersonIDhas1
NamehasAmir -->

<!-- 

Definition and Usage
The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.

Note: Fieldnames returned from this function are case-sensitive.

Syntax
Object oriented style:
$mysqli_result -> fetch_assoc()
Procedural style:
mysqli_fetch_assoc(result)
Parameter Values
Parameter	Description
result	Required. Specifies a result set identifier returned by mysqli_query(), mysqli_store_result() or mysqli_use_result()
Technical Details
Return Value:	Returns an associative array of strings representing the fetched row. NULL if there are no more rows in result-set
PHP Version:	5+    

 -->

 <!-- 
$arrar[] = 1;
$arrar[] = 2;
$arrar[] = 13;
$arrar[] = 14;
$arrar[] = 15;
print_r($arrar);
 -->


 <?php

// include 'user.class.php';

// class View extends User{

//     public function showAllUser(){
//         $detials = $this->getAllUser();
//         foreach($detials as $res){
//             print_r($res);
//             echo '<br>';
//         }
//     }
// }

// $obj1 = new View();
// $obj1->showAllUser();


?> 




<!-- include 'user.class.php';

class View extends User{

    public function showAllUser(){
        $detials = $this->getAllUser();
        foreach($detials as $res){
            print_r($res);
            echo '<br>';
        }
        foreach($detials as $res){
            foreach($res as $column){
                echo $column.'<br>';
            }
        }
    }
}

$obj1 = new View();
$obj1->showAllUser(); -->



<!-- 
include 'user.class.php';

class View extends User{

    public function showAllUser(){
        $detials = $this->getAllUser();
        foreach($detials as $res){
            echo $res['id'];
            echo $res['name'];
        }
    }
}

$obj1 = new View();
$obj1->showAllUser();
 -->
