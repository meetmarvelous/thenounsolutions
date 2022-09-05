<?php
include "../include/dbcon.php";
include "header.php";

$category = $_GET["category"];
$query = "SELECT * FROM `blog` WHERE `category` = '$category' ORDER BY id DESC LIMIT 5";
$select = mysqli_query($con, $query);
if (!$select) {
  die("error in getting data from blog databse");
}
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3 class="category-title">Category: <?php echo $category ?></h3>
          <?php
          while ($succes = mysqli_fetch_assoc($select)) {
            $id = $succes["id"];
            $heading = $succes["headings"];
            $file = $succes["file"];
            $title = $succes["title"];
            $category = $succes["category"];
            $description = $succes["description"];
            $date = $succes["date"];
          ?>
            <div class="d-md-flex post-entry-2 half">
              <a href="single-post.php?id=<?php echo $id ?>" class="me-4 thumbnail">
                <img src="./pictures/<?php echo $file ?>" alt="" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date"><?php echo $category ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date ?></span></div>
                <h3><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($heading, 0, 70)  ?> ...</a></h3>
                <p><?php echo substr($description, 0, 400)  ?> ...</p>
              </div>
            </div>
          <?php
          }
          ?>

          <div class="text-start py-4">
            <div class="custom-pagination">
              <a href="#" class="prev">Prevous</a>
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>
        <?php
        $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 7";
        $select = mysqli_query($con, $query);
        if (!$select) {
          die("error in selecting data from category in blog databse");
        }
        ?>
        <div class="col-lg-3">
          <div class="trending">
            <h3>Trending</h3>
            <ul class="trending-post">
              <?php
              while ($succes = mysqli_fetch_assoc($select)) {
                $id = $succes["id"];
                $heading = $succes["headings"];
                $file = $succes["file"];
                $title = $succes["title"];
                $category = $succes["category"];
                $description = $succes["description"];
                $date = $succes["date"];
              ?>
                <li>
                  <h3><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 40)  ?> ... <img src="./pictures/<?php echo $file ?>" alt="" class="img-fluid" width="50%"></a></h3>
                </li>
              <?php
              }
              ?>
            </ul>

          </div>
        </div> <!-- End Trending Section -->

      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php
include "footer.php"
?>