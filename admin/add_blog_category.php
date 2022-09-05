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
                  <a href="add_blog.php" class="btn btn-secondary">Add New Blog Post</a>
                  <a href="blog.php" class="btn btn-secondary">View All Blogs</a>
                  <a href="add_blog_category.php" class="btn btn-primary">Add New Blog Category</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {

        $category = stripslashes($_POST["category"]);

        $category = mysqli_real_escape_string($con, $category);


        // Get all the submitted data from the form
        $sql = "INSERT INTO `blog_category` (category) VALUES ('$category')";

        // Execute query
        $save = mysqli_query($con, $sql);

        if ($save) {
          echo "<script>window.alert('Blog Category added successfully!'); window.location='blog.php';</script>";
        } else {
          echo "<script>window.alert('Problem adding blog post to database!');</script>";
        }
      }

      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <div class="card-header">
              <button class="btn btn-primary" onclick="window.history.back();"><span class="fa fa-arrow-left"> </span> Back
              </button>
            </div>

            <div class="card-body">
              <h3 style="margin: 20px 0 0 20px">Add New Blog Category</h3>
              <form method="POST" class="form-group">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input class="form-control" name="category" placeholder="Input Category to be added" required>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input type="submit" name="upload" class="btn btn-primary col-md-12" value="Save">
                  </div>
              </form>
            </div>

            <div class="card-header">
              <h3 style="margin: 20px 0 0 0">Delete Blog Category</h3>
            </div>
            <h6 style="margin: 20px 0 0 20px">List of Blog Category</h6>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">S/N
                      </th>
                      <th>Blog Category</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $count = 1;
                    $query = "SELECT * FROM `blog_category`";
                    $select = mysqli_query($con, $query);
                    if (!$select) {
                      die("error in selecting data from category in blog database");
                    };
                    while ($succes = mysqli_fetch_assoc($select)) {
                      $category = $succes["category"];
                    ?>
                      <tr>
                        <td class="text-center"><?php echo $count++; ?></td>
                        <td> <?php echo $category ?> </td>
                        <td>
                          <a href="delete_blog_category.php?category=<?php echo $category; ?>" class="text-danger" title="delete content"><span class="fa fa-trash"> </span></a>
                        </td>
                      </tr>

                    <?php } ?>
                  </tbody>
                </table>
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