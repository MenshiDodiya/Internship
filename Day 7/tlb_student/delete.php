<?php
    $connection=mysqli_connect("localhost","root","","db_student")or die("Connection Failed");
    $id=$_GET['deletedId'];
    $sql="DELETE from tlb_student where stud_id='{$id}'";
    $query=mysqli_query($connection,$sql);
    if($query){
        echo "<script>alert('Record Deleted'); window.location='read.php';</script>";
    }
?>