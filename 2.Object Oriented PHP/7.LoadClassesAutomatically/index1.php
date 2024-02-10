<?php
include "includes/3.ClassAutoLoader.inc.php";// root directory for both index1.php and 2.ClassAutoLoader.inc.php is not same
                                             //root->index1.php='7.LoadClassesAutomatically' and root->3.ClassAutoLoader.inc.php='includes'
                                             //and root->includes='7.LoadClassesAutomatically'
                                             //we need to include "includes" as well top_root for 3.ClassAutoLoader.inc.php
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>LoadClassAutumatically</title>
</head>
<body>
    <?php
        $person1 = new Person('Amir');
        echo $person1->getPerson();
    ?>
</body>
</html>