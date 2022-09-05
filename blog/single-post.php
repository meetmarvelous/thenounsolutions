<?php 
  include "../include/dbcon.php";
  include "header.php";

  $id = $_GET["id"];
  $query = "SELECT * FROM `blog` WHERE `id` = '$id' ORDER BY id DESC"; 
  $select = mysqli_query($con, $query);
  if(!$select){
    die("error in getting data from blog databse");
  }
?>

  <main>

    <section class="single-post-content">
      <div class="container">
        <div class="row">
          <?php 
            while($succes = mysqli_fetch_assoc($select)){
              $heading = $succes["headings"];
              $file = $succes["file"];
              $title = $succes["title"];
              $category = $succes["category"];
              $description = $succes["description"];
              $date = $succes["date"];
          ?>
          <div class="col-md-9 post-content" data-aos="fade-up">
            <!-- ======= Single Post Content ======= -->
            <div class="single-post">
              <div class="post-meta"><span class="date"><?php echo $category  ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $date  ?></span></div>
              <h1 class="mb-5"><?php echo $heading  ?></h1>
              <p><span class="firstcharacter text-justify"></span><?php echo $title  ?></p>

              <figure class="my-4">
                <img src="./pictures/<?php echo $file ?>" alt="" class="img-fluid" width="90%">
              </figure>
              <p class="text-justify"><?php echo $description ?></p>
            </div><!-- End Single Post Content -->
            </div>
            <?php
              }
            ?>
            
            <?php
                $query = "SELECT * FROM `blog` ORDER BY id DESC LIMIT 7"; 
                $select = mysqli_query($con, $query);
                if(!$select){
                  die("error in selecting data from category in blog databse");
                }
            ?>
          <div class="col-lg-3">
            <div class="trending">
              <h3>Trending</h3>
              <ul class="trending-post">
              <?php
                while($succes = mysqli_fetch_assoc($select)){
                  $id = $succes["id"];
                  $heading = $succes["headings"];
                  $file = $succes["file"];
                  $title = $succes["title"];
                  $category = $succes["category"];
                  $description = $succes["description"];
                  $date = $succes["date"];
              ?>
                <li>
                <h3><a href="single-post.php?id=<?php echo $id ?>"><?php echo substr($title, 0,40)  ?> ... <img src="./pictures/<?php echo $file ?>" alt="" class="img-fluid" width="50%"></a></h3>
                </li> 
              <?php
                }
              ?>                 
              </ul>
              
            </div>
          </div> <!-- End Trending Section -->
          </div>

          
        </div>  
      </div>
    </section>
  </main><!-- End #main -->

<?php 
  include "footer.php"
?>