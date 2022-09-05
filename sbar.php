<section class="container">
  <h4 class="item-title text-center">Search for the material needed</h4>

  <div class="row">
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" name="">
        <div class="input-group search">
          <input type="text" name="search" class="form-control" placeholder="Search ...">
          <input class="btn btn-secondary" name="submit" type="submit" value="Search" />
          <input class="btn btn-secondary" type="button" value="Search" onclick="window.location= '<?php echo "pay.php?id=21"  ?>' " />
        </div>
      </form>
    </div>

  </div>

  <div class="col-sm-4">

  </div>
  </div>

</section>