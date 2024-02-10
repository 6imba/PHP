<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today</title>
</head>
<body>

    <?php
        echo date("l jS \of F Y h:i:s A")."<br>";
        $day = date("w");

        switch($day)
        {
            case 1:
                echo "Good Sunday Morning !";
                break;
            case 2:
                echo "Good Monday Morning !";
                break;
            case 3:
                echo "Good Tuesday Morning !";
                break;
            case 4:
                echo "Good Wednesday Morning !";
                break;
            case 5:
                echo "Good Thursday Morning !";
                break;
            case 6:
                echo "Good Friday Morning !";
                break;
            case 7:
                echo "Good Saturday Morning !";
                break;
        }
    ?>
</body>
</html>

