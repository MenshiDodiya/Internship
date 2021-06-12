<!--each, sort array function-->

<!DOCTYPE html>
<html>
<head>
	<title>each, sort array function</title>
</head>
<body>
	<?php
		$my_array = array("cat","dog","goat","lion","elephant","tiger");
		echo "\$my_array<br>";
		print_r($my_array);
		echo "<br>";
		print_r(each($my_array));
		echo "<br><hr color='red'>";
		$pro_array = array("java","php","c","c++","html",".net");
		echo "\$pro_array<br>";
		print_r($pro_array);
		while (list($key,$val)=each($pro_array)) 
		{
			echo "$key => $val<br>";
		}

		echo "<br><br><br><br>";
		$pre_array = array("sita","rohan","aditi","mansi","bansu");
		echo "before using sort function \$pre_array: <br>";
		print_r($pre_array);
		sort($pre_array);
		echo "<br>after using sort function \$pre_array:-<br>";
		print_r($pre_array);

		$pso_array = array(34,78,98,56,43,23,6);
		echo "<br> <br><br>before using sort function \$pso_array:-<br>";
		print_r($pso_array);
		sort($pso_array);
		echo "<br>after using sort function \$pso_array:-<br>";
		print_r($pso_array);

	?>
</body>
</html>
