    <!--next,previous,end array function-->

<!DOCTYPE html>
<html>
<head>
	<title>next, previous, end array function </title>
</head>
<body>
	<?php
		$my_array = array("java","php","c","c++","html",".net");
        print_r($my_array);
        echo "<br>";
		echo "the current element in array is:- ".current($my_array)."<br>";
		echo "the next element in array is:- ".next($my_array)."<br>";
		echo "the next element in arary is:- ".next($my_array);

		echo "<br><br><br>";
		$name_array = array("raj","priya","gita","monu","sonu","prem");
        print_r($name_array);
        echo "<br>";
		next($name_array);
		next($name_array);
		next($name_array);
		echo "the current element in array is:- ".current($name_array)."<br>";
		echo "the previous element in array is:- ".prev($name_array);

		echo "<br><br><br>";
		$language_array = array("english","gujarati","hindi","marathi","tamil");
		print_r($language_array);
        echo "<br>";
        echo "the end element in array is:- ".end($language_array);
	?>
</body>
</html>