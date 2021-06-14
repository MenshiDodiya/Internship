<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        *{
            box-sizing: border-box;
        }
        form{
            width: 500px;
            border-radius: 20px;
            background: #dfdfdf;
            margin: 1px auto;
            padding: 5px;
        }
        table{
            margin: 5px auto;
        }
        td{
            padding: 8px 20px;
        }
        th input{
            padding: 8px 30px;
        }
        td input,
        select{
            padding: 6px 20px;
            width: 100%;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id" id=""></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>E Mail</td>
                <td><input type="email" name="email" ></td>
            </tr>
            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>Pincode</td>
                <td><input type="text" name="pincode"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender" id="">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="date" name="dob" id=""></td>
            </tr>
            <tr>
                <td>Blodgroup</td>
                <td>
                    <select name="bloodgroup">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB-</option>
                        <option>AB+</option>
                        <option>O-</option>
                        <option>O+</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th><input type="submit" value="Submit"></th>
                <th><input type="reset" value="Reset"></th>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    if($_POST){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $bloodgroup=$_POST['bloodgroup'];
        $password=$_POST['password'];
        
        $sql="INSERT INTO tlb_student (stud_id,stud_name,stud_email,stud_mobile,stud_city,stud_pincode,stud_gender,stud_dob,stud_bloodgrp,stud_pass) VALUES ('$id','$name','$email','$mobile','$city','$pincode','$gender','$dob' ,'$bloodgroup','$password')" or die("Error".mysquli_error($connection));

        $query=mysqli_query($connection,$sql);
        if($query)
            echo "<script>alert('Record is added');</script>";
    }
?>