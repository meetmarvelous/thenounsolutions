  <div class="container">
    <form action="" method="GET" name="">
      <div class="input-group">
        <input type="text" value="" name="k" class="form-control" placeholder="Search ..." autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>


  <?php

  // CHECK TO SEE IF THE KEYWORDS WERE PROVIDED
  if (isset($_GET['k']) && $_GET['k'] != '') {

    // save the keywords from the url
    $k = trim($_GET['k']);

    // create a base query and words string
    $query_string = "SELECT * FROM ebook WHERE ";
    $display_words = "";

    // seperate each of the keywords
    $keywords = explode(' ', $k);
    foreach ($keywords as $word) {
      $query_string .= " title LIKE '%" . $word . "%' OR ";
      $display_words .= $word . " ";
    }
    $query_string = substr($query_string, 0, strlen($query_string) - 3);

    // connect to the database
    $conn = mysqli_connect($host, $username, $password, $db);

    $query = mysqli_query($conn, $query_string);
    $result_count = mysqli_num_rows($query);

    // check to see if any results were returned
    if ($result_count > 0) {

      // display search result count to user
      echo '<div class="container">
              <h2><i class="far fa-file-pdf"></i> Search Result</h2>
              <p>Showing all results matching " ' . $display_words . '"</p>';
      echo '<p class="text-right"><b><u>' . $result_count . '</u></b> results found</p></div>';


      echo
      '<section>
        <div class="container">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">S/N</th>
                  <th>Title/Code</th>
                  <th>Faculty</th>
                  <th>Year</th>
                </tr>
              </thead>
              <tbody>';

      // display all the search results to the user
      for ($counter = 1; $row = mysqli_fetch_assoc($query); $counter++) {
        echo '<tr  class="clickable " onclick="window.location= \'pay.php?id=' . $row['ebook_id'] . ' \' ">
                <td class="text-center">' . $counter . '</td>
                <td class=""><strong>' . $row['title'] . '</strong><br>' . $row['code'] . '</td>
                <td class="text-right">' . $row['faculty'] . '<br>' . $row['department'] . '</td>
                <td class="text-right">' . $row['year'] . '</td>
              </tr>';
      }

      echo
      '</tbody>
        </table>
        </div>
        </div>
        </section>';
    } else
      echo '<div class="container">
              <p>No results found. Cant find what you need? <i class="far fa-hand-point-right"></i> <a class="theme-link" href="' . $site['whatsapp_link'] . '"> Click here to tell us</a></p>
              
            </div>';
  } else
    echo '';
  ?>