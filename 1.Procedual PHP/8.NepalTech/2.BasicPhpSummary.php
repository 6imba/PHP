<?php
    $name = "SimbA";
    echo $name." RoarrrrrR<br>";

    echo var_dump($name)."<br>";//datatype with length

    $condition = True;
    echo var_dump($condition)."<br>";//datatype with value

    define ("name","Hari");
    echo name."<br>";

    echo "<br>";

    //If Else
    $a=5;
    $b=7;
    $c=9;
    if ($a>$b && $a>$c)
    {
        $greater="a".$a;
    }
    else if ($b>$a && $b>$c)
    {
        $greater="b".$b;
    }
    else
    {
        $greater="c".$c;
    }
    echo $greater;

    $age=21;
    if($age>=18)
    {
        echo "<br>Your age ".$age." is prefer for voting.<br>";
    }

    echo "<br>";

    //Switch Case
    $daynumber=3;
    switch($daynumber)
    {
        case 1:
        echo "Sunday";
        case 2:
        echo "Monday";
        case 3:
        echo "Tuesday";
        case 4:
        echo "Wednusday";
        case 5:
        echo "Thursday";
        case 6:
        echo "Friday";
        case 7:
        echo "Saturday";
    }

echo "<br>";

    $daynumber=3;
    switch($daynumber)
    {
        case 1:
        echo "Sunday";
        break;
        case 2:
        echo "Monday";
        break;
        case 3:
        echo "Tuesday";
        break;
        case 4:
        echo "Wednusday";
        break;
        case 5:
        echo "Thursday";
        break;
        case 6:
        echo "Friday";
        break;
        case 7:
        echo "Saturday";
        break;
    }

    echo "<br>";

    $daynumber=9;
    switch($daynumber)
    {
        case 1:
        echo "Sunday";
        break;
        case 2:
        echo "Monday";
        break;
        case 3:
        echo "Tuesday";
        break;
        case 4:
        echo "Wednusday";
        break;
        case 5:
        echo "Thursday";
        break;
        case 6:
        echo "Friday";
        break;
        case 7:
        echo "Saturday";
        break;
        default:
        echo "Input a number from 1-7!";
    }

    echo "<br><br>";

    //Loop
    $x=1;
    while($x<=10)//until value of x is smaller than 10 or equal to 10 echo x and increament
    {
        echo $x." ";
        $x++;
    }

    // echo "<br>";

    // $x=15;
    // while($x>=10)
    // //until value of x is greater than 10 or equal to 10 
    // //echo x and increament
    // //which means at begining value of x is 15 so it will echo 15 
    // //and increament take place and value of x becomes 16
    // //now when loop runs again value of x is 16 which satisfies the condition ($x>=10)
    // //where value of x is 16 and is greater than 10 and echo 16 
    // //so this goes on  infinity... as all increament of 15 is greater than 10...
    // {
    //     echo $x." ";
    //     $x++;
    // }

    
    echo "<br>";

    //for
    for ($x=1;$x<=10;$x++)
    {
        echo $x." ";
    }

    echo "<br>";


    //dowhile
    $x=1;
    do
    {
        echo $x." ";
        $x++;
    }
    while($x<=10);
       
    echo "<br><br>";

    //Array
    $name = array("Amir","Jimmy","Hema","Passang");
    foreach ($name as $value)
    echo $value."<br>";
    rsort($name);//reverse the order of value of array
    echo $value."<br>";//prints only value or first value of array as order of value of array is reversed it will print passang first
    foreach ($name as $value)//and this foreach loop will make print/echo each values of array after reverse (rsort)
    echo $value."<br>";
    //sort(arg),rsort(arg)....In-bilud function
    
    echo "<br>";

    //FunctioN
    function printname()
    {
        echo "Name : Thor Jetha<br>";
        echo "Address : AssGaud";
    }
    printname();
           
    echo "<br>";

    //ArgumentFunction
    function showname($name,$address)//here $address and $name is function varaible
    {
        echo "Parichaya : ".$name."<br>";
        echo "Thegana : ".$address;
    }
    showname("Loki Kanxa","AssGaud");

    echo "<br>";

    function owname()
    {
        $name="Amir";//declear variable inside function
        $address="Kapan";
        echo "Parichaya : ".$name."<br>";
        echo "Thegana : ".$address;
    }
    owname();

    echo "<br>";

    // $aa="Amir";//declear variable outside function
    // $bb="Kapan";
    // function loname($aa,$bb)    //here variable decleared outside the function cannot be passed as funtion argument so this is wrong
    // {
    //     echo "Parichaya : ".$aa."<br>";
    //     echo "Thegana : ".$bb;
    // }
    // loname();

    //so inorder to ovvercome above problem can use global varaible
    $aa="Rima";//declear variable outside function
    $bb="India";
    function loname()//here variable decleared outside the function is not passed as funtion argument 
    {
        global $aa,$bb;//declearing variable as global variable
        echo "NAME : ".$aa."<br>";
        echo "ADDRESS : ".$bb;
    }
    loname();


?>