<?php
#numerical array example
#method1
    $a[] = 34;
    $a[] = 45;
    $a[] = 65;
    $a[] = 5.7;
    $a[] = "c++";
#method2 //index dynamic array
    $a[] = 34;
    $a[] = 45;
    $a[] = 65;
    $a[] = 5.7;
    $a[] = "c++";
#method3 
    $a = array(34,45,65,5.7,"java","c++",76,"php");
    echo $a[4];

    for ($i=0; $i < count($a) ; $i++) { 
       echo "<br>". $a[$i];
    }
#3 inbuilt function to debug an array
    echo "<pre>";
    print_r($a);
    echo "<pre>";
    echo "<pre>";
    var_dump($a);
    echo "<pre>";
    