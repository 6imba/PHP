<!-- Database Connection file........... -->
<?php
    echo "Hello World I am Database Connecting............."
?>

<?php
    $host = "localhost";//servername
    $user ="root";//username
    $pass = "";//password for connection
    $dbname = "php";//name of database

    $conn = mysqli_connect($host,$user,$pass,$dbname) or die("Connection Fail");
    // mysqli_connect is a inbuilt phpfunction that connects to database where we need all 4 parameter.If it fail to connect inbuilt fucntion die() will ouccer as page wil die...
?>
