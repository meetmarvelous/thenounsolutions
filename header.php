<?php
include "include/dbcon.php";
session_start();

$collect = mysqli_query($con, "SELECT * FROM site_info where site_id='1' ");
$site = mysqli_fetch_array($collect);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $site['webname']; ?></title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Marvelbyte">
  <link rel="shortcut icon" href="assets/images/logo.jpg">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">

  <!-- FontAwesome JS-->
  <script defer src="assets/fontawesome/js/all.min.js"></script>

  <!-- Theme CSS -->
  <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <link id="theme-style" rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/nav.css">
  <link rel="stylesheet" href="assets/css/search.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

</head>