<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    $sql="SELECT * from tlb_student";
    $query=mysqli_query($connection,$sql);
    echo "<h1>Registration Record</h1>";
    echo "<table border='1' cellpadding=15px cellspacing=0>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Mobile NO</th>";
    echo "<th>City</th>";
    echo "<th>Pincode</th>";
    echo "<th>Gender</th>";
    echo "<th>Date of Birth</th>";
    echo "<th>Bloodgroup</th>";
    echo "<th>Password</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    while($row= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>{$row['stud_id']}</td>";
        echo "<td>{$row['stud_name']}</td>";
        echo "<td>{$row['stud_email']}</td>";
        echo "<td>{$row['stud_mobile']}</td>";
        echo "<td>{$row['stud_city']}</td>";
        echo "<td>{$row['stud_pincode']}</td>";
        echo "<td>{$row['stud_gender']}</td>";
        echo "<td>{$row['stud_dob']}</td>";
        echo "<td>{$row['stud_bloodgrp']}</td>";
        echo "<td>{$row['stud_pass']}</td>";
        echo "<td> <a href='delete.php?deletedId={$row['stud_id']}'> Delete the Data </a> </td>";
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
        h1{
            text-align: center;
        }
        div a{
            display: block;
            margin: 20px;
            padding: 8px;
            text-align: center;
            width:150px;
            font-weight:800;
            font-size: 18px;
            background: #000;
            color: #fff;
            text-decoration: none;
            margin: 10px auto;
        }
        table{
            background: #dfdfdf;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <div>
        <a href="add.php">Add The Data</a>
    </div>
</body>
</html>