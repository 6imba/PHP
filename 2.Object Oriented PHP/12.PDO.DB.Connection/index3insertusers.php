<?php

include "classes/insertusers.class.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php

$obj3 = new InsertUsers();
$obj3->getSetUsersStmt1(7,'Musk');

?>
    
</body>
</html>