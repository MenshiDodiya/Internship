<!--maximum of three numbers-->

<html>
<head>
	<title>Maximum number</title>
</head>
<body>
	<?php
		$a=45;
		$b=56;
		$c=34;

		echo "a:-".$a."<br>";
		echo "b:-".$b."<br>";
		echo "c:-".$c."<br>";
		if($a>$b and $a>$c)
		{
			echo "A is maximum";
		}
		elseif ($b>$c and $b>$a) 
		{
			echo "B is maximum";
		}
		elseif ($c>$a and $c>$b)
		 {
			echo "C is maximum";
		}
		else
		{
			echo "all are same";
		}
	?>
</body>
</html>