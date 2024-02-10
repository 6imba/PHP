<?php

    echo "Hello World I am Array in Php!<hr>";
    
    //Indexed Array
    $data1 = array("Hari","Bahadur","16");
    echo " I am index array ! ......";
    echo $data1[0];
    echo $data1[1]."_";
    echo $data1[2]."<hr>";
    
    //Associative Array
    $data2 = array("fname" => "Hari", "lname" => "Bahadur", "age" => 16);
    echo " I am associative array ! ......";
    echo $data2["fname"];
    echo $data2["lname"]."_";
    echo $data2["age"]."<br><br>";

    echo " I am another method of associative array ! ......";
    $data21["fname"] = "Hari";
    $data21["lname"] = "Bahadur";
    $data21["age"] = "16";
    print_r($data21);
    echo "<hr>";

    //MultiDimensional arrays
    $data3 = array(array(777,999,555),"Hari","Harry");
    echo " I am another method of associative array ! ......";
    echo "<br>".$data3["1"]."<br>";
    print_r($data3);
    echo "<br>".$data3[0][0];
    echo "<br>".$data3[0][1];
    echo "<br>".$data3[0][2];
    echo "<br>".$data3[1];
    echo "<br>".$data3[2];

?>