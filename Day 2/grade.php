
<!--grade displayed-->

<html>
<head>
	<title>Display the grade</title>
</head>
<body>
	<?php
		$maths=75;
		$science=75;
		$hindi=85;
		$english=87;
		$ss=80;
		$gujarati=95;

		$total=$maths+$science+$hindi+$english+$ss+$gujarati;

		echo "Marks of subject<br>";
		echo "Maths:- $maths <br>";
		echo "Science:- $science <br>";
		echo "Hindi:- $hindi <br>";
		echo "English:- $english <br>";
		echo "Social Science:- $ss <br>";
		echo "Gujarati:- $gujarati <br>";

		echo "<br>Total:- $total / 600 <br>";
		$result=$total*100/600;
		echo"Percentage:- $result % <br>";
		echo "<br>Grade:-";

		if ($result>0 && $result<50) 
		{
			echo "C Grade";
		}
		elseif ($result>=50 && $result<=100) 
		{
			echo "B Grade";
		}
		elseif ($result>=100) 
		{
			echo"A Grade";
		}
	?>
</body>
</html> 