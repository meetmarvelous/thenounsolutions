<?php include('../include/dbcon.php');
session_start();

$query = mysqli_query($con, "SELECT * FROM site_info");
$site = mysqli_fetch_array($query);
$book = mysqli_query($con, "SELECT * FROM ebook");
$book_count = mysqli_num_rows($book);
$user = mysqli_query($con, "SELECT * FROM user");
$user_count = mysqli_num_rows($user);
$blo = mysqli_query($con, "SELECT * FROM blog");
$blog_count = mysqli_num_rows($blo);

?>




<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $site['webname']; ?> Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>