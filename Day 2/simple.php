<!-- the simple program in php-->

<html>
    <head>
        <title>the simple program</title>
    </head>
<body>
<?php
    $a = 30;
    $b = 10;
    //method1
    echo "A value is: ".$a;
    echo "<br> B value is: ".$b;
    //method2
    echo "<br> A value is: ".$a."<br> B value is: ".$b;
    // method3
    echo "<br> A value is: $a <br> B value is: $b";
    // method4
    echo '<br> A value is: $a <br> B value is: $b';
    // method5
    echo "<br> A value is: $a <br> B value is: $b sum is: ". ($a+$b);
?>
</body>
</html>