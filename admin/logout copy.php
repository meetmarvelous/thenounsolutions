 
<?php
session_start();
// session_unset();
// session_destroy();

unset($_SESSION["admin_id"]);
unset($_SESSION["name"]);
header("Location:login.php");
?>

?>