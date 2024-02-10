<?php

include "classes/selectUser.class.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php

$obj2 = new SelectUser();
$obj2->getUsersStmt1(1,'Amir');
// $obj2->getUsersStmt2(1);
// $obj2->getUsersStmt3(1);

?>
    
</body>
</html>