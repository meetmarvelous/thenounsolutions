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
                  <a href="blog.php" class="btn btn-primary">View All Blogs</a>
                  <a href="add_blog_category.php" class="btn btn-secondary">Add New Blog Category</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header"><span class="fa fa-edit"></span> &nbsp;Manage All Blog Posts</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">S/N
                      </th>
                      <th>Blog Title</th>
                      <th>Headings</th>
                      <th>File</th>
                      <th>Category</th>
                      <th>Description</th>
                      <th>Date Added</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $count = 1;
                    $blo2 = mysqli_query($con, "SELECT * FROM blog order by id DESC");
                    while ($blog = mysqli_fetch_array($blo2)) {
                      $s_title = substr($blog['headings'], 0, 10) . "...";
                      $title = substr($blog['title'], 0, 10) . "...";
                      $desc = substr($blog['description'], 0, 30) . "...";
                    ?>

                      <tr>
                        <td class="text-center"><?php echo $count++; ?></td>
                        <td> <?php echo $title ?> </td>
                        <td><?php echo $s_title ?></td>
                        <td> <?php echo $blog['file'] ?> </td>
                        <td> <?php echo $blog['category'] ?> </td>
                        <td> <?php echo $desc ?> </td>
                        <td> <?php echo $blog['date'] ?> </td>
                        <td>
                          <a href="edit_blog.php?id=<?php echo $blog['id']; ?>" class="text-success" title="edit content"><span class="fa fa-edit"> </span></a>
                          <a href="delete_blog.php?id=<?php echo $blog['id']; ?>" class="text-danger" title="delete content"><span class="fa fa-trash"> </span></a>
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
    </div>

  </section>
</div>



<?php
include "footer.php";
?>