<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>User View</title>
</head>
<body>

    <h1>User View</h1>
    <?php 
    print_r($userData);
    ////multiple record
    // foreach($userData as $user):
    //     print_r($user);
    //     echo "Name:".$user->name.",    Email:".$user->email.",    Password:".$user->password."<br>";
    // endforeach;
    //singlerecord
    echo "Name:".$userData->name.",    Email:".$userData->email.",    Password:".$userData->password."<br>";
    ?>


    
</body>
</html>