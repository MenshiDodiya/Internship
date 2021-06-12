<!DOCTYPE html>
<html>
<head>
	<title>Student Marksheet</title>
	<style>
		table, th, td{
			border: 2px solid darkblue; 
			border-collapse: collapse;
			background-color: rgb(157, 212, 238);
			width: 450px;
			height: 40px;
			font-size: large;
		}
		body{
			background: rgb(199, 110, 83);
		}
	</style>
</head>
<body>
	<center>
		
		<table style="width=350px" title="Marksheet" align="center">
			<tr>
				<th colspan=2>MARKSHEET OF EXAM</th>
			</tr>
			<tr>
				<td colspan=2>Name : <?php echo $_POST["name"]?><br></td>
			</tr>
			<tr>
				<td colspan=2>Enrollment no. : <?php echo $_POST["no"]?><br></td>
			</tr>
			<tr>
				<td colspan=2>Gender : <?php echo $_POST["gender"]?><br></td>
			</tr>
			<tr>
				<td colspan=2>Branch : <?php echo $_POST["Branch"]?><br></td>
			</tr>
			<tr>
				<td colspan=2>Semester : <?php echo $_POST["sem"]?><br></td>
			</tr>
			<tr>
				<td><b>Subject</b></td>
				<td><b>Marks</b></td>
			</tr>
			<tr>
				<td>Advance java : </td>
				<td><?php echo $_POST["java"]?></td>
			</tr>
			<tr>
				<td>PHP :</td>
				<td><?php echo $_POST["PhP"]?></td>
			</tr>
			<tr>
				<td>Python :</td>
				<td><?php echo $_POST["Python"]?></td>
			</tr>
			<tr>
				<td>Android :</td> 
				<td><?php echo $_POST["android"]?></td>
			</tr>
			<tr>
				<td>C++ :</td>
				<td><?php echo $_POST["C"]?></td>
			</tr>	
			<tr>
				<td>Maximum Marks :</td>
				<td><?php echo max($_POST["java"],$_POST["PhP"],$_POST["Python"],$_POST["android"],$_POST["C"]);?>
				</td>
			</tr>
			<tr>
				<td>Minimum Marks :</td>
				<td><?php echo min($_POST["java"],$_POST["PhP"],$_POST["Python"],$_POST["android"],$_POST["C"]);?>
				</td>
			</tr>
			<tr>
				<td>Total :</td>
				<td>
					<?php 
						echo $sum=$_POST["java"]+$_POST["PhP"]+$_POST["Python"]+$_POST["android"]+$_POST["C"];
					?>
				</td>
			</tr>
			<tr>
				<td>Percentage :</td>
				<td><?php $percent=$sum/500*100;
					echo $percent."%";?>
				</td>
			</tr>
			<tr>
				<td colspan=2>Grade : <?php if($percent >= 90)
				{
					echo "Congratulations!!! your grade is AA";
				}
				elseif ($percent <= 89 && $percent >= 80) 
				{
					echo "Congratulations!!! your grade is AB";
				}	
				elseif ($percent <= 79 && $percent >= 70 )
				{
					echo "Congratulations!!! your grade is BB";
				}

				elseif ($percent <= 69 && $percent >= 60 )
				{
					echo "Congratulations!!! your grade is BC";
				}

				elseif ($percent <= 59 && $percent >= 50 )
				{
					echo "Congratulations!!! your grade is CC";
				}

				elseif ($percent <= 49 && $percent >= 33 )
				{
					echo "Congratulations!!! your grade is DD";
				}
				else
				{
					echo "you are failed";
				}
				?></td>
			</tr>
		</table>
	</center>
</body>
</html>