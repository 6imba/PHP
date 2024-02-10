<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>

    <form action="3.form.php" method="post">
    <label for="naam">Enter your name : </label><input type="text" name="naam" id="demo"><br>
    <label for="barsa">Enter your age : </label><input type="number" name="barsa"><br>
    <button  name="button">ADD</button>
    </form>
    <p id="hemo"></p>
</body>
</html>

<?php
if (isset($_POST['button']))
{//class
    class Oneclass
    {//property
        public $name; 
        public $age;
        //method
        public function SetInformation($firstdata , $secondata)
        {
            $this->name=$firstdata;
            $this->age =$secondata;
        ?>
            <script>
            var Array = [];
            var A = $this.name;
            Array.push(A);
            var list ='';
            Array.forEach(
                            function(value)
                                {
                                list = list + '<div>' + "Hello and Namaste, " + value + '</div>';
                                }
                           );
                      document.getElementById('hemo').innerHTML = list;
            </script>

        <?php
        }
    }  //object
    $objperson2 = new Oneclass;
    $objperson2->SetInformation($_POST['naam'],$_POST['barsa']);
}

?>
