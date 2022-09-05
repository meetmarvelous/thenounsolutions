<?php
include "header.php";
$testi = mysqli_query($con, "SELECT * FROM testimony");


$getid = $_GET["id"];
$one = mysqli_query($con, "SELECT * FROM ebook where ebook_id='$getid'");
$book = mysqli_fetch_array($one);
?>

<body>


  <?php
  include "nav.php";
  ?>

  <section id="content-section" class="content-section">
    <div class="container">
      <div class="single-col-max mx-auto">
        <h2 class="section-heading text-center mb-5">Click The Download Button Below</h2>
        <div class="key-points mb-4 text-center">
          <ul style="font-size: 20px;" class="key-points-list list-unstyled mb-4 mx-auto d-inline-block text-start">
            <li class="mb-2"><b>File Details: &nbsp; &nbsp; </b><i style="font-size: 30px;" class="far fa-file-pdf"></i></li>
            <li class="mb-2"><b>Title: </b><?php echo $book['title'] ?></li>
            <li class="mb-2"><b>Code: </b><?php echo $book['code'] ?></li>
            <li class="mb-2"><b>Department: </b><?php echo $book['department'] ?></li>
            <li class="mb-2"><b>Faculty: </b><?php echo $book['faculty'] ?></li>
            <li class="mb-2"><b>Year: </b><?php echo $book['year'] ?></li>
            <li class="mb-2"><b>Type: </b><?php echo $book['type'] ?></li>
            <li class="mb-2"><b>Size: </b><?php echo $book['size'] ?></li>
          </ul>
          <div class="text-center"><a class="btn btn-primary" href="downloadpdf.php?id=21">Download</a></div>
        </div>
      </div>
      <!--//single-col-max-->
    </div>
    <!--//container-->
  </section>

  <?php
  include "footer.php";
  ?>