<!--addition of 2 matrices-->

<!DOCTYPE html>
<html>
<head>
	<title>Addition of 2 Matrices</title>
</head>
<body>
	<?php
		$ar1=array(array(45,56),array(34,53));
		$ar2=array(array(2,4),array(34,3));
		echo"<h2>Array 1</h2>";
		for($i=0;$i<2;$i++)
		{
			for ($j=0; $j<2 ; $j++) 
			{ 
				echo $ar1[$i][$j]."&nbsp;&nbsp;&nbsp;";
			}
			echo"<br><br>";
		}

		echo"<h2>Array 2</h2>";
		for($i=0;$i<2;$i++)
		{
			for ($j=0; $j<2 ; $j++) 
			{ 
				echo $ar2[$i][$j]."&nbsp;&nbsp;&nbsp;";
			}
			echo"<br><br>";
		}

		echo"<h2>Addition</h2>";
		for($i=0;$i<2;$i++)
		{
			for ($j=0; $j<2 ; $j++) 
			{ 
				echo $ar1[$i][$j] + $ar2[$i][$j]."&nbsp;&nbsp;&nbsp;";
			}
			echo"<br><br>";
		}
	?>

</body>
</html>