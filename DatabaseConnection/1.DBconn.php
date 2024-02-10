<!-- connection to database -->

<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'php';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);
if($conn){
    echo "Connection established";
}
else{
    echo "Connection not established";
}
?>

<?php
    $dbserver  = "localhost";
    $dbuser    = "root";
    $dbpass    = "";
    $dbname    = "php";

    $conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname) or die("Connection not established");

?>

<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "php";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Connection Failed : ".mysqli_connect_error());
?>


<!-- OOP connection to database -->
<!-- return connection -->
<?php

class Dbh1{
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

?>


<!-- database connection using PDO IN OOP -->
<?php

class Dbh2{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "php";

    protected function connect(){
        $dsn = "mysql:host=".$this->host."; dbname=".$this->dbName;//data_source_name(descride type_of_data, type_of_host, database_name)
        $pdo = new PDO($dsn, $this->user, $this->password);//pdo_connection
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//optional : PDO error mode to exception
        return $pdo;
    }
}
?>


<?php
//connection to database
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'php';
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

echo '<br>';
print_r($conn);
echo '<br>';
echo gettype($conn);
echo '<br>';
var_dump($conn);


// output:
// mysqli Object ( [affected_rows] => 0 [client_info] => mysqlnd 7.4.9 [client_version] => 70409 [connect_errno] => 0 [connect_error] => [errno] => 0 [error] => [error_list] => Array ( ) [field_count] => 0 [host_info] => localhost via TCP/IP [info] => [insert_id] => 0 [server_info] => 5.5.5-10.4.14-MariaDB [server_version] => 100414 [sqlstate] => 00000 [protocol_version] => 10 [thread_id] => 27 [warning_count] => 0 )
// object
// object(mysqli)#1 (18) { ["affected_rows"]=> int(0) ["client_info"]=> string(13) "mysqlnd 7.4.9" ["client_version"]=> int(70409) ["connect_errno"]=> int(0) ["connect_error"]=> NULL ["errno"]=> int(0) ["error"]=> string(0) "" ["error_list"]=> array(0) { } ["field_count"]=> int(0) ["host_info"]=> string(20) "localhost via TCP/IP" ["info"]=> NULL ["insert_id"]=> int(0) ["server_info"]=> string(21) "5.5.5-10.4.14-MariaDB" ["server_version"]=> int(100414) ["sqlstate"]=> string(5) "00000" ["protocol_version"]=> int(10) ["thread_id"]=> int(27) ["warning_count"]=> int(0) }
?>