<!-- armstrong -->

<!DOCTYPE html>
<html>
<head>
	<title> Armstrong number</title>
</head>
<body>
<?php
	$num=342;//153;
	$sum=0;
	$temp=$num;
	while($temp!=0)
	{
		$rem=$temp%10;
		$sum=$sum+$rem*$rem*$rem;
		$temp=$temp/10;
	}
	if($num==$sum)
	{
		echo "Armstrong number:-$num";
	}
	else
	{
		echo "not an armstrong number:-$num";
	}

?>
</body>
</html>