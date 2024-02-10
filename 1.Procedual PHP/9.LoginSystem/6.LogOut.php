<?php

session_start();//session start
session_unset();//clear session
session_destroy();//destroy session
header("Location: 1.FrontLoginFile.php?msgg=logout");
exit();
?>