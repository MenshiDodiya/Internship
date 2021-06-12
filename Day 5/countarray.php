<!--count, list array function-->

<!DOCTYPE html>
<html>
<head>
	<title>Count, list array function</title>
</head>
<body>
	<?php
		$my_array = array("java","php","c","c++","html",".net");
		echo "The total elements inside array variable is:-".count($my_array);
		echo "<br>";

		$language_array = array("english","gujarati","hindi","marathi","tamil");
		echo "\$language_array<br>";
		print_r($language_array);
		echo "<br>";
		echo "<br>list(\$a,\$b,\$c,\$d,\$e) = \$language_array <br>";
		list($a,$b,$c,$d,$e) = $language_array;
		echo "language name \$a=$a, \$b=$b, \$c=$c, \$d=$d, \$e=$e <br>";
		echo "<br> list(\$x,\$y) = \$language_array<br>";
		list($x,$y) = $language_array;
		echo "language name \$x=$x, \$y=$y <br> ";
	 	echo "<br> list(\$p,\$q) = \$language_array<br>";
		list($p,$q) = $language_array;
		echo "language name \$p=$p, \$q=$q <br> ";
	?>
</body>
</html>