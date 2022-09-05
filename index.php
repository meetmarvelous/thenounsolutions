<?php
include "header.php";
$testi = mysqli_query($con, "SELECT * FROM testimony");

?>

<body>



  <?php
  include "nav_home.php";
  include "search.php";
  ?>


  <section class="hero-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
          <div class="promo pe-md-3 pe-lg-5">
            <h1 class="headline mb-3">
              <?php echo $site['about_heading']; ?>
            </h1>
            <!--//headline-->
            <div class="subheadline mb-4">
              <?php echo $site['welcome_note']; ?>
            </div>
            <!--//subheading-->

            <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
              <div class="col-12 col-md-auto">
                <a class="btn btn-primary w-100" href="#summary">Get Summary</a>
              </div>
              <div class="col-12 col-md-auto">
                <a class="btn btn-secondary scrollto w-100" href="#summary">Learn More</a>
              </div>
            </div>
            <!--//cta-holder-->

            <div class="hero-quotes mt-5">
              <div id="quotes-carousel" class="quotes-carousel carousel slide carousel-fade mb-5" data-bs-ride="carousel" data-bs-interval="8000">
                <ol class="carousel-indicators">
                  <li data-bs-target="#quotes-carousel" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#quotes-carousel" data-bs-slide-to="1"></li>
                  <li data-bs-target="#quotes-carousel" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <blockquote class="quote p-4 theme-bg-light">
                      "If you are a student and you have not used nounsolutions Educational Consultant course summary materials, you are missing big time! nounsolutions.com.ng is the BEST"
                    </blockquote>
                    <!--//item-->
                    <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
                      <div class="col-12 col-md-auto text-center text-md-start">
                        <img class="source-profile" src="assets/images/profiles/profile-2.png" alt="image">
                      </div>
                      <!--//col-->
                      <div class="col source-info text-center text-md-start">
                        <div class="source-name">Ishola Rebecca Damilola</div>
                        <div class="soure-title">Nou181000200</div>
                      </div>
                      <!--//col-->
                    </div>
                    <!--//source-->
                  </div>
                  <!--//carousel-item-->

                  <?php
                  $testis = mysqli_query($con, "SELECT * FROM testimony LIMIT 2");
                  for ($counter = 1; $testimony = mysqli_fetch_array($testis); $counter++) {
                  ?>


                    <div class="carousel-item">
                      <blockquote class="quote p-4 theme-bg-light">
                        <?php echo $testimony['comment'] ?>
                      </blockquote>
                      <!--//item-->
                      <div class="source row gx-md-3 gy-3 gy-md-0 align-items-center">
                        <div class="col-12 col-md-auto text-center text-md-start">
                          <img class="source-profile" src="<?php echo "assets/images/profiles/" . $testimony['image'] ?>" alt="image">
                        </div>
                        <!--//col-->
                        <div class="col source-info text-center text-md-start">
                          <div class="source-name"> <?php echo $testimony['name'] ?> </div>
                          <div class="soure-title"> <?php echo $testimony['noun_id'] ?></div>
                        </div>
                        <!--//col-->
                      </div>
                      <!--//source-->
                    </div>
                    <!--//carousel-item-->

                  <?php } ?>


                </div>
                <!--//carousel-inner-->
              </div>
              <!--//quotes-carousel-->

            </div>
            <!--//hero-quotes-->
          </div>
          <!--//promo-->
        </div>
        <!--col-->
        <div class="col-12 col-md-5 mb-5 align-self-center">
          <div class="embed-responsive">
            <iframe width="100%" height="350" class="embed-responsive-item" src="https://www.youtube.com/embed/L7zmcgoLQbo" allowfullscreen></iframe>
          </div>
        </div>
        <!--col-->
      </div>
      <!--//row-->
    </div>
    <!--//container-->
  </section>
  <!--//hero-section-->

  <!-- nav section -->
  <section class="mb-4" id="navv">
    <div class="container text-center">
      <div class="btns">
        <!-- <a class="btn btn-cta btn-primary" href="https://nou.edu.ng/fees-schedule/" target="_blank">Fee Analysis</a> -->
        <a class="btn btn-cta btn-secondary" href="./calc.php" target="_blank">Calculate GP</a>
        <a class="btn btn-cta btn-primary" href="<?php echo $site['whatsapp_link'] ?>" target="_blank">Get Past Result(CGPA)</a>
        <a class="btn btn-cta btn-secondary" href="#summary">Get Summary</a>
      </div>
    </div>
  </section>
  <!-- nav section end -->


  <section id="content-section" class="content-section">
    <div class="container">
      <div class="single-col-max mx-auto">
        <h2 class="section-heading text-center mb-5">What We Do!</h2>

        <div class="subheadline mb-4">
          We offer the following quality and standard services: at NATIONAL OPEN UNIVERSITY.
        </div>
        <!--//subheading-->

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="figure-holder mb-5">
              <img class="img-fluid" src="assets/images/devbook-devices.png" alt="image">
            </div>
            <!--//figure-holder-->
          </div>
          <!--//col-->
          <div class="col-12 col-md-6 mb-5">
            <div class="key-points mb-4 text-center">
              <ul class="key-points-list list-unstyled mb-4 mx-auto d-inline-block text-start">
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Admission processing.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Registrations.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Printing of course materials.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Course Summaries.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>IT reports.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Seminar.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Projects.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>TMA.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Guidance and counseling.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Tour and Field Course</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Website design.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Graphics design.</a></li>
                <li><a target="_blank" class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"><i class="fas fa-check-circle me-2"></i>Portal/result analysis e.t.c</a></li>
              </ul>
            </div>
            <!--//key-points-->

          </div>
          <!--//col-12-->
        </div>
        <!--//row-->
      </div>
      <!--//single-col-max-->
    </div>

    <!--//container-->
  </section>
  <!--//content-section-->




  <section id="summary" class="audience-section py-5">
    <div class="container">
      <h2 class="section-heading text-center mb-4">Get The Summary <i class="fas fa-arrow-down"></i></h2>
      <div class="section-intro single-col-max mx-auto text-center mb-5">
        Input in the search box below
      </div>

      <!-- BEGIN TABLE RESULT -->
      <div class="table-responsive">
        <table class="table table-hover table-bordered display" id="example" style="width:100%">
          <thead>
            <tr>
              <th class="text-center">S/N</th>
              <th>Code/Title</th>
              <th>Dept/Faculty</th>
              <th>Year</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $feat = "SELECT * FROM ebook LIMIT 6";
            $feature = mysqli_query($con, $feat);
            for ($counter = 1; $book = mysqli_fetch_assoc($feature); $counter++) {
            ?>
              <tr class="clickable " onclick="window.location= '<?php echo "pay.php?id=" . $book['ebook_id'];  ?>' ">
                <td class="text-center"> <?php echo $counter ?> </td>
                <td class=""><strong> <?php echo $book['title'] ?> </strong><br> <?php echo $book['code'] ?> </td>
                <td class="text-right"> <?php echo $book['department'] ?> <br> <?php echo $book['faculty'] ?> </td>
                <td class="text-right"> <?php echo $book['year'] ?> </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <div class="theme-bg-light">
          <p>Cant find what you need? <i class="far fa-hand-point-right"></i> <a class="theme-link" href="<?php echo $site['whatsapp_link'] ?>"> Click here to tell us</a></p>
        </div>

      </div>
      <!-- END TABLE RESULT -->


    </div>
    <!--//container-->
  </section>
  <!--//audience-section-->

  <section id="reviews-section" class="reviews-section py-5">
    <div class="container">
      <h2 class="section-heading text-center">Testimony</h2>
      <div class="section-intro text-center single-col-max mx-auto mb-5">See what our readers are saying. </div>
      <div class="row justify-content-center">

        <?php
        $testi = mysqli_query($con, "SELECT * FROM testimony");
        for ($counter = 1; $testimony = mysqli_fetch_array($testi); $counter++) {
        ?>

          <div class="item col-12 col-lg-4 p-3 mb-4">
            <div class="item-inner theme-bg-light rounded p-4">

              <blockquote class="quote">
                <?php echo $testimony['comment'] ?>
              </blockquote>
              <!--//item-->
              <div class="source row gx-md-3 gy-3 gy-md-0">
                <div class="col-12 col-md-auto text-center text-md-start">
                  <img class="source-profile" src=" <?php echo "assets/images/profiles/" . $testimony['image'] ?> " alt="image">
                </div>
                <!--//col-->
                <div class="col source-info text-center text-md-start">
                  <div class="source-name"> <?php echo $testimony['name'] ?> </div>
                  <div class="soure-title"> <?php echo $testimony['noun_id'] ?> </div>
                </div>
                <!--//col-->
              </div>
              <!--//source-->
              <div class="icon-holder"><i class="fas fa-quote-right"></i></div>
            </div>
            <!--//inner-->
          </div>
          <!--//item-->

        <?php } ?>
      </div>
      <!--//row-->

    </div>
    <!--//container-->
  </section>

  <!--//form-section-->


  <?php

  // If subscribe button is clicked ...
  if (isset($_POST['subscribe'])) {

    $email = stripslashes($_POST["email"]);
    $email = mysqli_real_escape_string($con, $email);
    $date = date("d/m/Y");

    // Get all the submitted data from the form
    $sql = "INSERT INTO subscribe (email, date) VALUES ('$email','$date')";

    // Execute query
    $save = mysqli_query($con, $sql);

    if ($save) {
      echo "<script>window.alert('Subscribed successfully!'); window.location='index.php';</script>";
    } else {
      echo "<script>window.alert('Error!');</script>";
    }
  }

  ?>

  <section id="form-section" class="form-section">
    <div class="container">
      <div class="lead-form-wrapper single-col-max mx-auto theme-bg-light rounded p-5">
        <h2 class="form-heading text-center">Subscribe To Our Newsletter</h2>
        <!-- <div class="form-intro text-center mb-3">Sign up to get a free preview of the book. <br>You can offer visitors free book previews to generate leads.</div> -->
        <div class="form-wrapper mx-auto">
          <form method="POST" class="signup-form row g-2 align-items-center">
            <div class="col-12 col-lg-9">
              <label class="sr-only" for="semail">Email</label>
              <input type="email" id="semail" name="email" class="form-control me-md-1 semail" placeholder="Your email">
            </div>
            <div class="col-12 col-lg-3">
              <button type="submit" name="subscribe" class="btn btn-primary btn-submit w-100">Send</button>
            </div>
          </form>
          <!--//signup-form-->
        </div>
        <!--//form-wrapper-->
      </div>
      <!--//lead-form-wrapper-->
    </div>
    <!--//container-->
  </section>


  <!--//form-section-->

  <?php
  include "footer.php";
  ?>