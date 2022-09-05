<?php
include "header.php";
?>

<body>



  <?php
  include "nav_contact.php";
  ?>

  <?php

  // If upload button is clicked ...
  if (isset($_POST['send'])) {

    $name = stripslashes($_POST["name"]);
    $number = stripslashes($_POST["number"]);
    $email = stripslashes($_POST["email"]);
    $message = stripslashes($_POST["message"]);
    $date_sent = date("d/m/Y");

    $name = mysqli_real_escape_string($con, $name);
    $number = mysqli_real_escape_string($con, $number);
    $email = mysqli_real_escape_string($con, $email);
    $message = mysqli_real_escape_string($con, $message);


    // Get all the submitted data from the form
    $sql = "INSERT INTO message (name, number, email, message, date_sent) VALUES ('$name','$number','$email','$message','$date_sent')";

    // Execute query
    $save = mysqli_query($con, $sql);

    if ($save) {
      echo "<script>window.alert('Message sent successfully!'); window.location='contact.php';</script>";
    } else {
      echo "<script>window.alert('Problem sending message!');</script>";
    }
  }

  ?>



  <!-- contact section -->
  <section class="contact_section layout_padding mb-50">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
        <p>
          Feel free to contact us any time. <?php echo $site['webname']; ?> always there to help you.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="img-box">
            <img src="assets/images/contact.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="form_container">
            <form method="POST" enctype="multipart/form-data">
              <div>
                <input type="text" placeholder="Your Name" name="name" required />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="number" required />
              </div>
              <div>
                <input type="email" placeholder="E-mail" name="email" required />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message" required />
              </div>
              <div class="btn_primary">
                <button type="submit" name="send">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!--//form-section-->

  <?php
  include "footer.php";
  ?>