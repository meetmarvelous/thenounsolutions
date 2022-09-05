<?php include('../include/dbcon.php');
session_start();

if (isset($_SESSION['admin_id']) || !empty($_SESSION['admin_id'])) {
    echo "<script>window.location='dashboard.php'; </script>";
}else{
    echo "<script>window.location='login.php'; </script>";
}
