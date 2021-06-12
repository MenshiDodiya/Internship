<!--fibonacci series-->

<html>
<head>
<title>fibonacci series </title>
</head>
<body>
<?php
	$count=0;
	$a=0;
	$b=1;
    echo "the fibonacci series is: <br>";
	echo $a."<br>";
	echo $b."<br>";
	while($count<10)
	{
		$c=$a+$b;
		echo $c."<br>";
		$a=$b;
		$b=$c;
		$count=$count+1;
	}
?>
</body>
</html>