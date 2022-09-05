<?php
include("header.php");
include("nav.php");
include("nav/nav_index.php");
?>

<?php
$book = mysqli_query($con, "SELECT * FROM ebook");
$book_count = mysqli_num_rows($book);
$user = mysqli_query($con, "SELECT * FROM user");
$user_count = mysqli_num_rows($user);
$blo = mysqli_query($con, "SELECT * FROM blog");
$blog_count = mysqli_num_rows($blo);
?>




<?php
include "footer.php";
?>