<?php
    $connection=mysqli_connect("localhost","root","","student_details")or die("Connection Failed");
    $sql="SELECT * from student_form";
    $query=mysqli_query($connection,$sql);
    echo "<h1>Student Registration Record</h1>";
    echo "<table cellspacing=0>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>First name</th>";
    echo "<th>Last name</th>";
    echo "<th>Email</th>";
    echo "<th>Mobile</th>";
    echo "<th>Address</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Pincode</th>";
    echo "<th>Date of Birth</th>";
    echo "<th>Gender</th>";
    echo "<th>Hobbies</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    while($row= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>{$row['id_stud']}</td>";
        echo "<td>{$row['fname_stud']}</td>";
        echo "<td>{$row['lname_stud']}</td>";
        echo "<td>{$row['email_stud']}</td>";
        echo "<td>{$row['mobile_stud']}</td>";
        echo "<td>{$row['add_stud']}</td>";
        echo "<td>{$row['city_stud']}</td>";
        echo "<td>{$row['state_stud']}</td>";
        echo "<td>{$row['pincode_stud']}</td>";
        echo "<td>{$row['dob_stud']}</td>";
        echo "<td>{$row['gender_stud']}</td>";
        echo "<td>{$row['hobby_stud']}</td>";
        echo "<td> <a href='delete.php?deletedId={$row['id_stud']}'> Delete the Data </a> </td>";
        echo "</tr>";
    }    
    echo "</table>";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #7bff7b;
        }
        h1{
            text-align:center;
            margin-top: 20px;
            color:#005a00;
        }
        table{
            margin: 10px auto;
            background: #c7ffc7;
        }
        th{
            padding: 20px;
            background: #009c00;
            color: #fff;
        }
        td{
            padding: 10px 15px;
            border-bottom: 1px solid #a7a7a7;
        }
        table a{
            border-color: pink;
            display: block;
            background: #ff5151;
            color: #fff;
            border-radius: 20px;
            padding: 6px 10px;
	        text-decoration: none;
	        font-weight: 600;
        }
        table a:hover{
            background: #ff0000;
        }
        div a{
            display: block;
            margin: 20px auto;
            padding: 8px;
            text-align: center;
            width:150px;
            font-weight:800;
            font-size: 18px;
            background: #fff;
            color:#005a00;
            text-decoration: none;
            border-radius:20px;
        }
    </style>
</head>
<body>
    <div>
        <a href="add.php">Add The Data</a>
    </div>
</body>
</html>