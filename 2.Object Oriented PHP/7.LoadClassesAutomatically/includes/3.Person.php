<?php
include "2.ClassAutoLoader.inc.php";//ClassAutoLoader and current file is in same directory(i.e includes) OR 
                                    // root directory for both 3.Person.php and 2.ClassAutoLoader.inc.php is same(i.e includes)
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>LoadClassAutumatically</title>
</head>
<body>
    <?php
        $person1 = new Pserson('Amir');
        echo $person1->getPerson();
    ?>
</body>
</html>