<?php
#associative array
#key=value
#method1 
    $a[0] = 20;
    $a['v'] = 'variable';
    $a['c'] = 'c and c++';
    $a['java'] = 'java and advance java';
    $a[10] = 'ten';
#method2 
    $a = array(
        0 => 20,
        "v" => "variable",
        "c" => "c and c++",
        "java" => "java and advance java",
        10 => "ten",
        3 => 6.8
    );

    echo "c for ". $a['c'] ."<br>";
     
    foreach($a as $value){
        echo "<br> Value is $value";
    }
    echo "<br>";
    foreach ( $a as $key => $value){
        echo "<br> key is <b>$key</b> and value is <b>$value</b>";
    }