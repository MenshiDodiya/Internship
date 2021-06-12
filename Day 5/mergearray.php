<!--array_merge, array_reverse array function-->

<!DOCTYPE html>
<html>
<head>
	<title>array_merge, array_reverse array function</title>
</head>
<body>
	<?php
		$pro_array1 = array("c","c++","java","php","asp.net");
		$pro_array2 = array("vb.net","android","python");
		$pro_array3 = array_merge($pro_array1,$pro_array2);
		echo "pro_array1:-";
		print_r($pro_array1);
		echo "<br><br>pro_array2:-";
		print_r($pro_array2);
		echo"<br><br>the appending of \$pro_array1 and \$pro_array2 elements in \$pro_array3";
		echo "<br><br>pro_array3:-";
		print_r($pro_array3);

		echo "<br><br><br>";
		$language_array = array("english","gujarati","hindi","marathi","tamil");
		echo "the array before using array reverse function:-<br>";
		print_r($language_array);
		echo "<br><br> the array after using array reverse function:-<br>";
		print_r(array_reverse($language_array));
	?>
</body>
</html>