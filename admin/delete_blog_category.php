<?php
include('../include/dbcon.php');
// session_start();

$getCategory = $_GET['category'];

mysqli_query($con, "DELETE FROM `blog_category` where category ='$getCategory'");
header("location: blog.php");
echo "<script>window.alert('successfully deleted'); window.location='blog.php';<script>";
