<?php
    $connection=mysqli_connect("localhost","root","","db_internship");
    $sql="SELECT * from tbl_user";
    $query=mysqli_query($connection,$sql);
    echo "<h1>Record</h1>";
    echo "<table border='1' cellpadding=10px cellspacing=0>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Name</th>";
    echo "<th>Gender</th>";
    echo "<th>Mobile</th>";
    echo "<th colspan=2>Action</th>";
    echo "</tr>";
    while($row= mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>{$row['user_id']}</td>";
        echo "<td>{$row['user_name']}</td>";
        echo "<td>{$row['user_gender']}</td>";
        echo "<td>{$row['user_mobile']}</td>";
        echo "<td> <a href='delete.php?deletedId={$row['user_id']}'>Delete</a> </td>";
        echo "<td> <a href='update.php?updatedId={$row['user_id']}'>Update</a> </td>";
        echo "</tr>";
    }
    echo "<tr><td colspan=6><a href='add.php'>Add The Data</a></td></tr>";
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
        a{
            display: block;
            padding: 5px 10px;
            margin: 0 auto;
            text-align: center;
            max-width:150px;
            border: 1px solid #bfbfbf;
            text-decoration: none;
            border-radius: 10px;
        }
        h1{
            text-align: center;
        }
        table{
            margin: 10px auto;
        }
    </style>
</head>
<body>
    
</body>
</html>