<?php
include('../include/dbcon.php');
// session_start();

$getid = $_GET['id'];

mysqli_query($con, "DELETE FROM blog where id ='$getid'");
header("location: blog.php");
echo "<script>window.alert('successfully deleted'); window.location='blog.php';<script>";
