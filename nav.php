<header>
  <nav class="navbar navbar-expand-sm bg-light navbar-light custom_nav-container">
    <div class="container">

      <a class="navbar-brand" href="#"><img height="35px" width="35px" class="logo-icon me-2" src="assets/images/logo.jpg" alt="logo"><span class="logo-text"><?php echo $site['webname']; ?></span></a>
      <button class="navbar-toggler text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="blog/">BBCNOUN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog/tma.php">TMA SOLUTION</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">NOUN AID</a>
              <div class="dropdown-menu">
                <a href="index.php#navv" class="dropdown-item">Fee Analysis</a>
                <a href="calc.php" class="dropdown-item">Calculate GP</a>
                <a href="#" class="dropdown-item">Get Past Result</a>
              </div>
            </li>

          </ul>
        </div>

      </div>

    </div>
  </nav>
</header>