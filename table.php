<?php
include "header.php";
?>

<body>



  <?php
  include "nav.php";
  ?>

  <section style="margin-top: 50px; margin-bottom: 50px;">

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <div class="container">
      <div class="row">
        <!-- BEGIN SEARCH RESULT -->
        <div class="col-md-12">
          <div class="grid search">
            <div class="grid-body">
              <!-- BEGIN RESULT -->
              <div class="container">
                <h2><i class="fa fa-file-o"></i>Search Result</h2>
                <hr>
                <!-- BEGIN SEARCH INPUT -->
                <div class="input-group">
                  <input type="text" value="web development" name="live_search" id="live_search" class="form-control" placeholder="Search ...">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
                <div id="search_result"></div>

                <!-- END SEARCH INPUT -->
                <p>Showing all results matching "web development"</p>

                <div class="padding"></div>
                <!-- BEGIN TABLE RESULT -->
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">S/N</th>
                        <th>Code/Title</th>
                        <th>Faculty</th>
                        <th>Year</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">1</td>
                        <td class=""><strong>Product 1</strong><br>This is the product description.</td>
                        <td class="text-right">Science<br>Science</td>
                        <td class="text-right">2015</td>
                      </tr>
                      <tr>
                        <td class="text-center">2</td>
                        <td class=""><strong>Product 1</strong><br>This is the product description.</td>
                        <td class="text-right">Science<br>Science</td>
                        <td class="text-right">2015</td>
                      </tr>
                      <tr>
                        <td class="number text-center">3</td>
                        <td class="product"><strong>Product 3</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></span></td>
                        <td class="price text-right">$550</td>
                      </tr>
                      <tr>
                        <td class="number text-center">4</td>
                        <td class="product"><strong>Product 4</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span></td>
                        <td class="price text-right">$330</td>
                      </tr>
                      <tr>
                        <td class="number text-center">5</td>
                        <td class="product"><strong>Product 5</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                        <td class="price text-right">$540</td>
                      </tr>
                      <tr>
                        <td class="number text-center">6</td>
                        <td class="product"><strong>Product 6</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
                        <td class="price text-right">$870</td>
                      </tr>
                      <tr>
                        <td class="number text-center">7</td>
                        <td class="product"><strong>Product 7</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></td>
                        <td class="price text-right">$620</td>
                      </tr>
                      <tr>
                        <td class="number text-center">8</td>
                        <td class="product"><strong>Product 8</strong><br>This is the product description.</td>
                        <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
                        <td class="price text-right">$1,550</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END TABLE RESULT -->

                <!-- BEGIN PAGINATION -->
                <ul class="pagination">
                  <li class="disabled"><a href="#">«</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li>
                </ul>
                <!-- END PAGINATION -->
              </div>
              <!-- END RESULT -->
            </div>
          </div>
        </div>
      </div>
      <!-- END SEARCH RESULT -->
    </div>
    </div>

  </section>


  <!--//form-section-->

  <?php
  include "footer.php";
  ?>