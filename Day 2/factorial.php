<!-- Factorial -->

<!DOCTYPE html>
<html>
<head>
	<title>Factorial</title>
</head>
<body>
	<?php
		$a=6;
		$fact;
		echo "***Factorial***<br>";
		echo "value of \$a is $a<br>";
		$fact=Factorial($a);
		echo "Factorial of \$a is $fact <br>";
		function factorial($n)
		{
			$sum=1;
			for($i=1;$i<=$n;$i++)
			{
				$sum=$sum*$i;
			}
			return $sum;
		}
	?>
</body>
</html>