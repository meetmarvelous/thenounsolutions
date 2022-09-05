<?php
include "header.php";
$testi = mysqli_query($con, "SELECT * FROM testimony");

?>

<body>


  <?php
  include "nav.php";
  ?>


  <section id="audience-section" class="audience-section py-5">
    <div class="container">
      <h2 class="section-heading text-center mb-4">Who This Book Is For</h2>
      <div class="section-intro single-col-max mx-auto text-center mb-5">
        List your target readers in this section and back up with reviews. Lorem ipsum dolor sit amet, consectetur
        adipiscing elit. Proin sodales sit amet neque sit amet molestie. Vivamus hendrerit nisi condimentum erat tempus,
        vitae accumsan odio euismod.
      </div>
      <!--//section-intro-->
      <div class="audience mx-auto">
        <div class="item row gx-3">
          <div class="col-auto item-icon"><i class="fas fa-user-check"></i></div>
          <div class="col">
            <h4 class="item-title">Software Developers</h4>
            <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales sit amet
              neque sit amet molestie.</div>
          </div>
          <!--//col-->
        </div>
        <!--//item-->
        <div class="item row gx-3">
          <div class="col-auto item-icon"><i class="fas fa-user-check"></i></div>
          <div class="col">
            <h4 class="item-title">App Developers</h4>
            <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales sit amet
              neque sit amet molestie.</div>
          </div>
          <!--//col-->
        </div>
        <!--//item-->
        <div class="item row gx-3">
          <div class="col-auto item-icon"><i class="fas fa-user-check"></i></div>
          <div class="col">
            <h4 class="item-title">Web Developers</h4>
            <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales sit amet
              neque sit amet molestie.</div>
          </div>
          <!--//col-->
        </div>
        <!--//item-->
        <div class="item row gx-3">
          <div class="col-auto item-icon"><i class="fas fa-user-check"></i></div>
          <div class="col">
            <h4 class="item-title">Product Designers</h4>
            <div class="item-desc">Learn lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales sit amet
              neque sit amet molestie.</div>
          </div>
          <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
            <div class="col-12 col-md-auto">
              <a class="btn btn-secondary scrollto w-100 text-center" href="download.php?path=profile.png" download>Download</a>
            </div>
          </div>
          <!--//col-->
        </div>
        <!--//item-->
      </div>
      <!--//audience-->
    </div>
    <!--//container-->
    <!--//cta-holder-->



  </section>
  <!--//audience-section-->

  <?php
  include "footer.php";
  ?>