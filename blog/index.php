<?php
include "../include/dbcon.php";
include "header.php"
?>

<main>
  <?php
  $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 6";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from blog database");
  }
  ?>

  <!-- ======= Hero Slider Section ======= -->
  <section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
      <div class="row">
        <div class="col-12">
          <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">
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
                <div class="swiper-slide">
                  <a href="single-post.php?id=<?php echo $id ?>" class="img-bg d-flex align-items-end" style="background-image: url('./pictures/<?php echo $file ?>');">
                    <div class="img-bg-inner">
                      <h2><?php echo substr($title, 0, 50)  ?></h2>
                      <p class="mb-4 d-block"><?php echo substr($description, 0, 300)  ?> ...</p>
                    </div>
                  </a>
                </div>
              <?php
              }
              ?>
            </div>
            <div class="custom-swiper-button-next">
              <span class="bi-chevron-right"></span>
            </div>
            <div class="custom-swiper-button-prev">
              <span class="bi-chevron-left"></span>
            </div>

            <div class="swiper-pagination"></div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero Slider Section -->




  <?php
  $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 16";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from blog databse");
  }
  ?>
  <!-- ======= Post Grid Section ======= -->
  <section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
      <div class="row g-5">
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
          <div class="col-lg-3">
            <div class="post-entry-1 lg">
              <a href="single-post.php?id=<?php echo $id ?>"><img src="./pictures/<?php echo $file ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h4><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 50)  ?> ...</a></h4>
              <p class="mb-4 d-block"><?php echo substr($description, 0, 100)  ?> ...</p>
            </div>
          </div>
        <?php
        }
        ?>
      </div> <!-- End .row -->
    </div>
  </section> <!-- End Post Grid Section -->


  <!-- TMA -->

  <?php
  $category = "TMA";
  $query = "SELECT * FROM `blog` WHERE `category` = '$category' ORDER BY id DESC LIMIT 8 ";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from category in blog databse");
  }
  ?>
  <!-- ======= TMA Category Section ======= -->
  <section class="category-section" id="tma">
    <div class="container" data-aos="fade-up">

      <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?php echo $category ?></h2>
        <div><a href="category.php?category=<?php echo $category ?>" class="more">See All <?php echo $category ?></a></div>
      </div>
      <div class="row">
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
          <div class="col-lg-3">
            <div class="post-entry-1 lg">
              <a href="single-post.php?id=<?php echo $id ?>"><img src="./pictures/<?php echo $file  ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h4><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($heading, 0, 50)  ?> ...</a></h4>
              <p class="mb-4 d-block"><?php echo substr($description, 0, 100)  ?> ...</p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section><!-- End TMA Category Section -->




  <!-- TMA END -->


  <?php
  $category = "Crypto";
  $query = "SELECT * FROM `blog` WHERE `category` = '$category' ORDER BY id DESC LIMIT 8 ";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from category in blog databse");
  }
  ?>
  <!-- ======= Crypto Category Section ======= -->
  <section class="category-section">
    <div class="container" data-aos="fade-up">

      <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?php echo $category ?></h2>
        <div><a href="category.php?category=<?php echo $category ?>" class="more">See All <?php echo $category ?></a></div>
      </div>
      <div class="row">
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
          <div class="col-lg-3">
            <div class="post-entry-1 lg">
              <a href="single-post.php?id=<?php echo $id ?>"><img src="./pictures/<?php echo $file  ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h4><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($heading, 0, 50)  ?> ...</a></h4>
              <p class="mb-4 d-block"><?php echo substr($description, 0, 100)  ?> ...</p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section><!-- End Crypto Category Section -->

  <?php
  $category = "Business";
  $query = "SELECT * FROM `blog` WHERE `category` = '$category' ORDER BY id DESC LIMIT 8";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from category in blog databse");
  }
  ?>
  <!-- ======= Business Category Section ======= -->
  <section class="category-section">
    <div class="container" data-aos="fade-up">

      <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?php echo $category ?></h2>
        <div><a href="category.php?category=<?php echo $category ?>" class="more">See All <?php echo $category ?></a></div>
      </div>
      <div class="row">
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
          <div class="col-lg-3">
            <div class="post-entry-1 lg">
              <a href="single-post.php?id=<?php echo $id ?>"><img src="./pictures/<?php echo $file  ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h4><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 50)  ?> ...</a></h4>
              <p class="mb-4 d-block"><?php echo substr($description, 0, 100)  ?> ...</p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section><!-- End Business Category Section -->

  <?php
  $category = "Sport";
  $query = "SELECT * FROM `blog` WHERE `category` = '$category' ORDER BY id DESC LIMIT 12";
  $select = mysqli_query($con, $query);
  if (!$select) {
    die("error in selecting data from category in blog databse");
  }
  ?>
  <!-- ======= Business Category Section ======= -->
  <section class="category-section">
    <div class="container" data-aos="fade-up">

      <div class="section-header d-flex justify-content-between align-items-center mb-5">
        <h2><?php echo $category ?></h2>
        <div><a href="category.php?category=<?php echo $category ?>" class="more">See All <?php echo $category ?></a></div>
      </div>
      <div class="row">
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
          <div class="col-lg-3">
            <div class="post-entry-1 lg">
              <a href="single-post.php?id=<?php echo $id ?>"><img src="./pictures/<?php echo $file  ?>" alt="" class="img-fluid"></a>
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h4><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($title, 0, 50)  ?> ...</a></h4>
              <p class="mb-4 d-block"><?php echo substr($description, 0, 100)  ?> ...</p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section><!-- End Business Category Section -->

</main><!-- End #main -->

<?php
include "footer.php"
?>