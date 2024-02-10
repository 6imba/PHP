<?php
echo '1. Index file <br>';
include "includes/5.Inheritance.Classloader.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>InheriatanceLoadClass</title>
</head>
<body>
    <?php
        echo '3. Index file html body <br>';
        $person1 = new Person();
        echo '12. out of Auto class loader, and classes';
    ?>
</body>
</html>