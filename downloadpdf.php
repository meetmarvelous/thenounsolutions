<?php
include "include/dbcon.php";
// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT * FROM ebook WHERE ebook_id=$id";
    $result = mysqli_query($con, $sql);

    $fil = mysqli_fetch_array($result);
    $f = $fil['filename'];

    $file = ("ebook/$f");

    $filetype = filetype($file);

    $filename = basename($file);

    header("Content-Type: " . $filetype);

    header("Content-Length: " . filesize($file));

    header("Content-Disposition: attachment; filename=" . $filename);

    readfile($file);

    echo "<script>window.history.back();</script>";
}
