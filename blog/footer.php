 <!-- footer section -->

  <footer class="footer_bg">
  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="info_info">
            <h5 class="section-heading text-white mb-3">
              <b><?php echo $site['webname'] ?></b>
            </h5>
            <p style="text-align: justify;">
              <?php echo $site['about_content']; ?>
            </p>
          </div>
          <div style="font-size: 25px;">
            <a href="<?php echo $site['facebook_link']; ?>" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="<?php echo $site['twitter_link']; ?>" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="<?php echo $site['whatsapp_link']; ?>" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="<?php echo $site['youtube_link']; ?>" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="<?php echo $site['instagram_link']; ?>" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="info_contact">
            <h5 class="section-heading text-white mb-3">
              Quick Contact
            </h5>
            <div>
              <div class="img-box">
                <i class="fab fa-whatsapp"></i>
              </div>
              <p>
                <a href=<?php echo $site['whatsapp_link'] ?>>
                  <?php echo $site['phone_no'] ?>
                </a>
              </p>
            </div>
            <div>
              <div class="img-box">
                <i class="fa fa-phone"></i>
              </div>
              <p>
                <a href=<?php echo "tel:" . $site['phone_no'] ?>><?php echo $site['phone_no'] ?></a>
              </p>
            </div>
            <div>
              <div class="img-box">
                <i class="fab fa-twitter"></i>
              </div>
              <p>
                <a href=<?php echo "mailto:" . $site['email'] ?>><?php echo $site['email'] ?></a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-2 mb-2">
          <div class="info_links">
            <h5 class="section-heading text-white mb-3">NAVIGATION</h5>
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="index.php">Blog</a></li>
            </ul>
          </div>
        </div>

        <?php
            $query = "SELECT * FROM `blog_category`";
            $select = mysqli_query($con, $query);
            if (!$select) {
              die("error in selecting data from category in blog databse");
            }
        ?>        
        <div class="col-md-3 mb-3">
          <div class="info_links">
            <h5 class="section-heading text-white mb-3">Category</h5>
            <ul>
              <?php
                while ($succes = mysqli_fetch_assoc($select)) {
                  $category = $succes["category"];
              ?>
              <li><a href="category.php?category=<?php echo $category ?>"><?php echo  $category ?></a></li>
              <?php  } ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- foot section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            Copyright &copy; 2022 | All Rights Reserved |
            <a href="https://nounsolutions.com.ng"><?php echo $site['webname']; ?></a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- foot section -->
</footer>
  <!-- end footer section -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




<script>
  $(document).ready(function() {
    $('.search-box input[type="text"]').on("keyup input", function() {
      /* Get input value on change */
      var inputVal = $(this).val();
      var resultDropdown = $(this).siblings(".result");
      if (inputVal.length) {
        $.get("backend-search.php", {
          term: inputVal
        }).done(function(data) {
          // Display the returned data in browser
          resultDropdown.html(data);
        });
      } else {
        resultDropdown.empty();
      }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function() {
      $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
      $(this).parent(".result").empty();
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

</body>
</html>