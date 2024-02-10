<?php
    require "class1.php";
    require "class2.php";
    use Person1\Person as P1;
    use Person2\Person as P2;
    var_dump(new P1());
    echo "</br>";
    var_dump(new P1());
    echo "</br>";
    var_dump(new P2());
?>