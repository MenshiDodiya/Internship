<?php
    $connection=mysqli_connect("localhost","root","","student_details")or die("Connection Failed");
    $id=$_GET['deletedId'];
    $sql="DELETE from student_form where id_stud='{$id}'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo "<script>alert('Record Deleted'); window.location='read.php';</script>";
    }
?>