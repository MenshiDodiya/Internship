<!--in_array, current array function-->

<!DOCTYPE html>
<html>
<head>
	<title>in_array, current array function</title>
</head>
<body>
	<?php
		$my_array = array("cat","dog","goat","lion","elephant","tiger");
        print_r($my_array);
        echo "<br>";
		echo "The element dog is there in \$my_array:- ".in_array("dog", $my_array)."<br>";
		echo "The element cow is there in \$my_array:- ".in_array("cow", $my_array);

		echo "<br><br>";
		$pro_array = array("java","php","c","c++","html",".net");
        print_r($pro_array);
        echo "<br>";
		echo "The current value of \$pro_array is:- ".current($pro_array);
	?>
</body>
</html>