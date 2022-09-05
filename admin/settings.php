<?php
include("header.php");
include("nav.php");
include("nav/nav_index.php");


$getid = 1;
$collect = mysqli_query($con, "SELECT * FROM site_info where site_id='$getid' ");
$site = mysqli_fetch_array($collect);


if (isset($_POST['change1'])) {
  $webname = $_POST['webname'];
  $phone_no = $_POST['phone_no'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $change1 = mysqli_query($con, "UPDATE site_info SET webname='$webname', phone_no= '$phone_no', email='$email', address='$address' where site_id='$getid' ");

  if ($change1) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

if (isset($_POST['change2'])) {
  $welcome_note = $_POST['welcome_note'];
  $work_hours = $_POST['work_hours'];
  $work_days = $_POST['work_days'];
  $facebook_link = $_POST['facebook_link'];
  $whatsapp_link = $_POST['whatsapp_link'];
  $instagram_link = $_POST['instagram_link'];
  $youtube_link = $_POST['youtube_link'];
  $twitter_link = $_POST['twitter_link'];

  $change2 = mysqli_query($con, "UPDATE site_info SET welcome_note='$welcome_note', work_hours= '$work_hours', work_days='$work_days', facebook_link='$facebook_link', whatsapp_link='$whatsapp_link', instagram_link='$instagram_link', youtube_link='$youtube_link', twitter_link='$twitter_link' where site_id='$getid' ");

  if ($change2) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

if (isset($_POST['change3'])) {
  $about_heading = $_POST['about_heading'];
  $about_content = $_POST['about_content'];

  $change3 = mysqli_query($con, "UPDATE site_info SET about_heading='$about_heading', about_content= '$about_content' where site_id='$getid' ");

  if ($change3) {
    echo "<script>window.alert('successfully updated!'); window.location='settings.php';</script>";
  } else {
    echo "<script>window.alert('Failed to update Info!');</script>";
  }
}

?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="container">
                <h3>Website Settings</h3>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {

        $title = stripslashes($_POST["title"]);
        $code = stripslashes($_POST["code"]);
        $department = stripslashes($_POST["department"]);
        $faculty = stripslashes($_POST["faculty"]);
        // $typ = stripslashes($_POST["type"]);
        $year = stripslashes($_POST["year"]);

        $title = mysqli_real_escape_string($con, $title);
        $code = mysqli_real_escape_string($con, $code);
        $department = mysqli_real_escape_string($con, $department);
        $faculty = mysqli_real_escape_string($con, $faculty);
        // $typ = mysqli_real_escape_string($con, $typ);
        $year = mysqli_real_escape_string($con, $year);

        $sql = "UPDATE ebook SET title='$title', code='$code', department='$department', faculty='$faculty', year='$year' where ebook_id='$getid' ";

        // Execute query
        $save = mysqli_query($con, $sql);

        if ($save) {
          echo "<script>window.alert('File Info edited successfully!'); window.location='ebook.php';</script>";
        } else {
          echo "<script>window.alert('Problem inserting file data to database!');</script>";
        }
      }

      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-primary" onclick="window.history.back();">
                <span class="fa fa-arrow-left"> </span> Back
              </button>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <form method="POST" class="form-group" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Website Name</label>
                      <input type="text" class="form-control" value="<?php echo $site['webname']; ?>" name="webname" required>
                    </div>

                    <div class="form-group">
                      <label>Contact Number</label>
                      <input type="text" class="form-control" value="<?php echo $site['phone_no']; ?>" name="phone_no" required>
                    </div>

                    <div class="form-group">
                      <label>Contact Email</label>
                      <input type="text" class="form-control" value="<?php echo $site['email']; ?>" name="email" required>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="col-md-12" rows="5" name="address" required><?php echo $site['address']; ?></textarea>
                    </div>

                    <div class="form-group form-button">
                      <button type="submit" name="change1" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                    </div>
                  </form>
                </div>

                <div class="col-md-4">
                  <form method="POST">

                    <div class="form-group">
                      <label>Welcome Note</label>
                      <textarea class="col-md-12" rows="5" name="welcome_note" required><?php echo $site['welcome_note']; ?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Working Hours</label>
                      <input type="text" class="form-control" value="<?php echo $site['work_hours']; ?>" name="work_hours" required>
                    </div>

                    <div class="form-group">
                      <label>Working Days</label>
                      <input type="text" class="form-control" value="<?php echo $site['work_days']; ?>" name="work_days" required>
                    </div>

                    <div class="form-group">
                      <label>Facebook Link</label>
                      <input type="text" class="form-control" value="<?php echo $site['facebook_link']; ?>" name="facebook_link" required>
                    </div>

                    <div class="form-group">
                      <label>Whatsapp Link</label>
                      <input type="text" class="form-control" value="<?php echo $site['whatsapp_link']; ?>" name="whatsapp_link" required>
                    </div>

                    <div class="form-group">
                      <label>Instagram Link</label>
                      <input type="text" class="form-control" value="<?php echo $site['instagram_link']; ?>" name="instagram_link" required>
                    </div>

                    <div class="form-group">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control" value="<?php echo $site['twitter_link']; ?>" name="twitter_link" required>
                    </div>

                    <div class="form-group">
                      <label>YouTube Link</label>
                      <input type="text" class="form-control" value="<?php echo $site['youtube_link']; ?>" name="youtube_link" required>
                    </div>

                    <div class="form-group form-button">
                      <button type="submit" name="change2" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                    </div>
                  </form>
                </div>

                <div class="col-md-4">

                  <form method="POST">
                    <div class="form-group">
                      <label>About Heading</label>
                      <textarea rows="5" class="col-md-12" name="about_content" required><?php echo $site['about_heading']; ?></textarea>

                    </div>

                    <div class="form-group">
                      <label>About Content</label>
                      <textarea rows="5" class="col-md-12" name="about_content" required><?php echo $site['about_content']; ?></textarea>
                    </div>

                    <div class="form-group form-button">
                      <button type="submit" name="change3" class="btn btn-fill col-md-12 btn-primary">Update Information</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</div>



<?php
include "footer.php";
?>