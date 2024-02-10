<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="includes/Calculator.inc.php" method="GET">
    <p>My own calculator</p>
    <input type="number" name="numb1" placeholder="First number">
    <select name="operation1">
        <option value="sum">Addition</option>
        <option value="diff">Subtraction</option>
        <option value="of">Multiplication</option>
        <option value="by">Division</option>
    </select>
    <input type="number" name="numb2" placeholder="Second number">
    <button type="submit" name="submit">Calculate</button>
</form>
    
</body>
</html>