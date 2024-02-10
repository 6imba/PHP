<?php

print_r($data1);
echo '<br>';
echo '<br>';

foreach($data1 as $user){
    print_r($user);
    echo '<br>';
    echo 'Id:'.$user['id'].' Title:'.$user['name'].' Data'.$user['number'];
    echo '<br>';
}


?>