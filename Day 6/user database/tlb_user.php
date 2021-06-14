<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
        form{
            width: 400px;
            padding: 20px;
            margin: 10px auto;
            border: 1px solid #000;
        }
        table{
            margin: 10px auto;
        }
        td{
            padding: 20px;
        }
        input{
            padding: 8px;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <h2>Enter Your Details</h2>
        <table>
            <tr>
                <td>Id</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
				<td>Gender</td>
				<td>
					<input type="radio" id="male" name="gender" value="male">Male
					<input type="radio" id="female" name="gender" value="female">Female
					<input type="radio" id="other" name="gender" value="other">Other
				</td>
			</tr>
            <tr>
                <td>Mobile no.</td>
                <td><input type="number" name="num" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    $connection=mysqli_connect("localhost","root","","db_internship");
    if($_POST){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $num=$_POST['num'];
        $sql="INSERT INTO tbl_user (user_id,user_name,user_gender,user_mobile) VALUES ('{$id}','{$name}','{$gender}','{$num}')";
        $query=mysqli_query($connection,$sql);
        if($query)
            echo "<script>alert('Record is added');</script>";
    }
?>