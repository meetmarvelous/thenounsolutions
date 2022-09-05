<?php
include("header.php");
include("nav.php");
include("nav/nav_index.php");
?>

<?php
$book = mysqli_query($con, "SELECT * FROM ebook");
$book_count = mysqli_num_rows($book);
$user = mysqli_query($con, "SELECT * FROM user");
$user_count = mysqli_num_rows($user);
$blo = mysqli_query($con, "SELECT * FROM blog");
$blog_count = mysqli_num_rows($blo);
$blogcat = mysqli_query($con, "SELECT * FROM blog_category");
$cat_count = mysqli_num_rows($blogcat);


$getid = $_GET['id'];
$blog_edit = mysqli_query($con, "SELECT * FROM blog where id='$getid'");
$that_blog = mysqli_fetch_array($blog_edit);

?>


<div class="main-content">
  <section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-statistic-4">
              <div class="container">
                <h3>Manage Blogs</h3>
                <div class="btn-group">
                  <a href="add_blog.php" class="btn btn-primary">Add New Blog Post</a>
                  <a href="blog.php" class="btn btn-secondary">View All Blogs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {

        $title = stripslashes($_POST["title"]);
        $headings = stripslashes($_POST["headings"]);
        $description = stripslashes($_POST["description"]);
        $category = stripslashes($_POST["category"]);
        // $date_add = date("d/m/Y");

        $title = mysqli_real_escape_string($con, $title);
        $headings = mysqli_real_escape_string($con, $headings);
        $description = mysqli_real_escape_string($con, $description);
        $category = mysqli_real_escape_string($con, $category);

        $sql = "UPDATE blog SET title='$title', headings='$headings', description='$description', category='$category' where id='$getid' ";

        // Execute query
        $save = mysqli_query($con, $sql);

        if ($save) {
          echo "<script>window.alert('Blog edited successfully!'); window.location='blog.php';</script>";
        } else {
          echo "<script>window.alert('Problem editing blog post to database!');</script>";
        }
      }

      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"><button class="btn btn-primary" onclick="window.history.back();"><span class="fa fa-arrow-left"> </span> Back</button></div>
            <div class="card-body">
              <form method="POST" class="form-group" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>Blog Title</label>
                    <textarea class="form-control" name="title" placeholder="" required><?php echo $that_blog['title'] ?></textarea>

                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>Blog Headings</label>
                    <textarea class="form-control" name="headings" placeholder="" required><?php echo $that_blog['headings'] ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Description</label>
                    <textarea rows="10" class="col-md-12" name="description" required><?php echo $that_blog['description'] ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select name="category" class="form-control selectric">

                        <option disabled="disabled" selected="selected">--Blog Category--</option>
                        <?php
                        while ($cat = mysqli_fetch_array($blogcat)) {
                        ?>
                          <option value="<?php echo $cat['category'] ?>"><?php echo $cat['category'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                  </div>
                </div>
                <br>
                <input type="submit" name="upload" class="btn btn-primary col-md-12" value="Save">
              </form>
            </div>
          </div>
        </div>
      </div>

  </section>
</div>


<?php
include "footer.php";
?>