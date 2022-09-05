<?php
include "include/dbcon.php";

if (isset($_POST['query'])) {
  $query = "SELECT * FROM ebook WHERE title LIKE '{$_POST['query']}%' ";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    while ($res = mysqli_fetch_array($result)) {
?>
      <a href="details.php?id=<?php echo $res['ebook_id']; ?>"> <?php echo $res['title'] ?> </a><br>
<?php
    }
  }
}
