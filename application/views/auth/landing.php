<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/landing.css" />

    <!-- =====BOX ICONS===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <title>Seminario</title>
  </head>
  <body>
    <!--===== HEADER =====-->
    <header class="l-header">
      <nav class="nav bd-grid">
        <div>
          <a href="#" class="nav__logo">Seminario</a>
        </div>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
            <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
            <li class="nav__item"><a href="#footer" class="nav__link">Contact</a></li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>

    <main class="l-main">
      <!--===== HOME =====-->
      <section class="home bd-grid" id="home">
        <div class="home__data">
          <h1 class="home__title">
            Get a new seminar<br />experience at<br /> 
            <span class="home__title-color">seminario</span>          
          </h1>

          <a href="<?= base_url('auth'); ?>" class="button">Login</a>
        </div>

        <div class="home__social">
          <a href="" class="home__social-icon"><i class="bx bxl-facebook"></i></a>
          <a href="" class="home__social-icon"><i class="bx bxl-instagram"></i></a>
          <a href="" class="home__social-icon"><i class="bx bxl-twitter"></i></a>
        </div>

        <div class="home__img">
          <img src="<?= base_url('assets/'); ?>img/landing/head.png" alt="" />
        </div>
      </section>

      <!--===== ABOUT =====-->
      <section class="about section" id="about">
        <h2 class="section-title">About</h2>

        <div class="about__container bd-grid">
          <div class="about__img">
            <img src="<?= base_url('assets/'); ?>img/landing/about.png" alt="" />
          </div>

          <div>
            <p class="about__text">
              Seminario adalah situs seminar berbasis E-seminar. Website ini akan memberikan pengalaman dan kemudahan baru bagi penggunanya, dengan seminar seminari akan menyenangkan dan bisa dilakukan dimana saja. 
            </p>
          </div>
        </div>
      </section>
    
    <!--===== FOOTER =====-->
    <footer class="footer" id="footer">
      <p class="footer__title">Seminario</p>
      <div class="footer__social">
        <a href="#" class="footer__icon"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="footer__icon"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="footer__icon"><i class="bx bxl-twitter"></i></a>
      </div>
    </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="<?= base_url('assets/'); ?>js/landing.js"></script>
  </body>
</html>
