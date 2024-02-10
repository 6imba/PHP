<?php

session_start();//session start
session_unset();//clear session
session_destroy();//destroy session
header("Location:../2.index.php?msgg=logout");
exit();
?>