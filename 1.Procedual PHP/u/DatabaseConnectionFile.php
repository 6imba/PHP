<!-- Database Connection file.......................... -->
<?php echo "Hello I am Database Connection File" ?>

<?php
    $dbServername = "localhost";
    $dbUsername   = "root";
    $dbpassword   = "";
    $dbname       = "php&databasell";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbname)or die();//connection to the database
    // mysqli_connect is a inbuilt phpfunction that connects the instant file with database where we need all 4 parameter.If it fail to connect inbuilt fucntion die() will ouccer as page wil die.
?>



