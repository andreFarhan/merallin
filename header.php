<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1 class="sitename"><span style="color: #114B79">Merallin</span> Sukses Abadi</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <?php if ($_SERVER['SCRIPT_NAME'] == '/merallin/index.php'): ?>
          <li><a href="/merallin" class="active">Home</a></li>
          <?php else: ?>
          <li><a href="/merallin">Home</a></li>
          <?php endif ?>
          <?php if ($_SERVER['SCRIPT_NAME'] == '/merallin/about.php'): ?>
          <li class="dropdown"><a href="about" class="active"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="about">About</a></li>
              <li><a href="team">Team</a></li>
              <li><a href="testimonials">Testimonials</a></li>
            </ul>
          </li>
          <?php else: ?>
          <li class="dropdown"><a href="about"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="about">About</a></li>
              <li><a href="team">Team</a></li>
              <li><a href="testimonials">Testimonials</a></li>
            </ul>
          </li>
          <?php endif ?>
          <?php if ($_SERVER['SCRIPT_NAME'] == '/merallin/services.php'): ?>
          <li><a href="services" class="active">Services</a></li>
          <?php else: ?>
          <li><a href="services">Services</a></li>
          <?php endif ?>
          <?php if ($_SERVER['SCRIPT_NAME'] == '/merallin/portfolio.php'): ?>
          <li><a href="portfolio" class="active">Portfolio</a></li>
          <?php else: ?>
          <li><a href="portfolio">Portfolio</a></li>
          <?php endif ?>
          <?php if ($_SERVER['SCRIPT_NAME'] == '/merallin/contact.php'): ?>
          <li><a href="contact" class="active">Contact</a></li>
          <?php else: ?>
          <li><a href="contact">Contact</a></li>
          <?php endif ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <!-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a> -->
        <a href="https://www.facebook.com/people/Merallin-Suksess-Abadi/pfbid02syphDAE6EdwGwvsbPVSSXmhR99PnYnByoW9wd9TMd1dCjDa7SPp12tXcBK9HQLF8l/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/merallin.group/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/merallin-sukses-abadi-6a4143349/" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>