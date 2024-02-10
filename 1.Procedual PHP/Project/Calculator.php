<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        <h1>Enter two number :</h1>
        <input type="number" name="numb1" placeholder="Number1" required>
        <input type="number" name="numb2" placeholder="Number12" required>
        <br>
        <br>

        <label for="operation">Operations : </label>
        <select name="operation" >
            <option value="add">ADD</option>
            <option value="diff">SUBRACT</option>
            <option value="mult">MULTIPLY</option>
            <option value="div">DIVISION</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submitbtn">Calculate</button>
    </form>

    <?php
        if(isset($_GET["submitbtn"]))
        {
            $number1 = $_GET["numb1"];
            $number2 = $_GET["numb2"];
            $operator = $_GET["operation"];

            switch($operator)
            {
                case "add":
                    echo  " Sum = ",$number1+$number2;
                    break;
                case "diff":
                    echo " Difference = ",$number1-$number2;
                    break;
                case "mult":
                    echo " Product = ",$number1*$number2;
                    break;
                case "div":
                    echo " DIVISION = ",$number1/$number2;
                    break;
            }
        }

    ?>
    
</body>
</html>



<!-- 
//name="operation"  is key/name 
HERE since no value in option select item is passed as value
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        <h1>Enter two number :</h1>
        <input type="number" name="numb1" placeholder="Number1" required>
        <input type="number" name="numb2" placeholder="Number12" required>
        <br>
        <br>

        <label for="operation">Operations : </label>
        <select name="operation" >    
            <option >ADD</option>  
            <option >SUBRACT</option>
            <option >MULTIPLY</option>
            <option >DIVISION</option>
        </select>
        <br>
        <br>
        <button type="submit" name="submitbtn">Calculate</button>
    </form>
  
    <?php
        if(isset($_GET["submitbtn"]))
        {
            $number1 = $_GET["numb1"];
            $number2 = $_GET["numb2"];
            $operator = $_GET["operation"];

            switch($operator)
            {
                case "ADD":
                    echo  " Sum = ",$number1+$number2;
                    break;
                case "SUBRACT":
                    echo " Difference = ",$number1-$number2;
                    break;
                case "MULTIPLY":
                    echo " Product = ",$number1*$number2;
                    break;
                case "DIVISION":
                    echo " DIVISION = ",$number1/$number2;
                    break;
            }
        }

    ?>
    
</body>
</html>  -->