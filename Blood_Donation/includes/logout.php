<?php

session_start();//session start
session_unset();//clear session
session_destroy();//destroy session
header("Location:../index1.php?msgg=logout");
exit();
?>