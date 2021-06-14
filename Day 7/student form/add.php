<!DOCTYPE html>
<html>

<head>
	<title> Registration Form </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>

	</style>
	<link rel="stylesheet" type="text/css" href="css/style1.css"> 

</head>

<body style="background-image: url(about-header.jpg)">
	<table bgcolor="#F4F3F8" align="center" style="border-radius: 20px">
		<form action="" method="POST" class="container">
			<tr>
				<th colspan="3" bgcolor="#616163" style="border-radius: 20px" >
					<h1>Registration Form</h1>
				</th>
			</tr>
            <tr>
				<td style="width: 200px"><label for="id">Enrollment No.</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="number" name="id" id="id" required><br></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="fname">First name</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="text" name="fname" id="fname" required><br></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="lname">Last name</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="text" name="lname" id="lname" required><br></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="emailid">Email id</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="email" name="emailid" id="emailid"></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="mobile no.">Mobile no.</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="number" name="mobile" id="mobile" maxlength="10" required></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="add">Address</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><textarea name="address" rows="5" cols="30" required></textarea></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="city">Choose your City</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><select id="city" name="city">
						<option value="ahmedabad">Ahemdabad</option>
						<option value="surat">Surat</option>
						<option value="rajkot">Rajkot</option>
						<option value="vadodara">Vadodara</option>
						<option value="bhavnagar">Bhavnagar</option>
						<option value="jamnagar">Jamnagar</option>
						<option value="gandhinagar">Gandhinagar</option>
						<option value="junagadh">Junagadh</option>
						<option value="nadiad">Nadiad</option>
						<option value="anand">Anand</option>
					</select></td>
			</tr>
			<tr>
				<td style="width: 200px"><label for="state">State</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="text" name="state" id="state" required><br></td>
			</tr>
            <tr>
				<td style="width: 200px"><label for="code">Pincode</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="number" name="code" id="code" required><br></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="dob">Date of Birth</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px"><input type="Date" name="dob" id="dob" value=" "></td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="gender">Gender</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px">
					<input type="radio" id="male" name="gender" value="male">Male
					<input type="radio" id="female" name="gender" value="female">Female
					<input type="radio" id="other" name="gender" value="other">Other
				</td>
			</tr>

			<tr>
				<td style="width: 200px"><label for="hobbies">Hobbies</label></td>
				<td style="width: 30px"><b>:</b></td>
				<td style="width: 300px">
					<input type="checkbox" id="hobby1" name="hobby[]" value="drawing">Drawing<br>
					<input type="checkbox" id="hobby2" name="hobby[]" value="reading">Reading<br>
					<input type="checkbox" id="hobby3" name="hobby[]" value="dancing">Dancing<br>
					<input type="checkbox" id="hobby4" name="hobby[]" value="singing">Singing<br>
					<input type="checkbox" id="hobby5" name="hobby[]" value="writing">Writing
				</td>
			</tr>

			<tr>
				<td colspan="3" align="center">
					<button type="submit" value="Submit" class="btn">Submit
					</button>&nbsp;&nbsp;
					<button type="reset" value="Reset data" class="btn">Reset Data
					</button>
				</td>
			</tr>
           <tr> 
                <td align="center" colspan="3">
                    <a href="read.php" class="links">Read Student Records</a>
                </td>
           </tr>
		</form>

	</table>
</body>

</html>

<?php
    $connection=mysqli_connect("localhost","root","","student_details")or die("Connection Failed");
    if($_POST){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['emailid'];
        $mobile=$_POST['mobile'];
        $add=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['code'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $hobby=$_POST['hobby'];
        $check= implode(",",$hobby);
        
        $sql="INSERT INTO student_form (id_stud,fname_stud,lname_stud,email_stud,mobile_stud,add_stud,city_stud,state_stud,pincode_stud,dob_stud,gender_stud,hobby_stud) VALUES ('$id','$fname','$lname','$email','$mobile','$add','$city','$state','$pincode','$dob','$gender','$check')" or die("Error".mysquli_error($connection));

        $query=mysqli_query($connection,$sql);
        if($query)
            echo "<script>alert('Record is added');</script>";
    }
?>