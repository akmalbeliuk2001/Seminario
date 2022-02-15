<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/home.css" />

    <!-- =====BOX ICONS===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Seminario Home Page</title>
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
            <li class="nav__item"><a href="#skills" class="nav__link">Advantages</a></li>
            <li class="nav__item"><a href="#work" class="nav__link">Seminars</a></li>
            <li class="nav__item"><a href="#footer" class="nav__link">Contact</a></li>
            <li class="nav__item"><a href="<?= base_url('user'); ?>" class="nav__link">Profile</a></li>
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

      <!--===== SKILLS =====-->
      <section class="skills section" id="skills">
        <h2 class="section-title">Advantages</h2>

        <div class="skills__container bd-grid">
          <div>
            <p class="skills__text">Manfaat dan Kelebihan apa saja yang Anda dapatkan saat Anda mengikuti Webinar dibandingkan Anda hadir Seminar tatap muka pada umumnya?</p>
            <div class="skills__data">
              <div class="skills__names">
                <span class="skills__name">Hemat biaya</span>
              </div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <span class="skills__name">Sangat fleksible</span>
              </div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <span class="skills__name">Interaksi dengan banyak orang</span>
              </div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <span class="skills__name">Dapat belajar langsung</span>
              </div>
            </div>
          </div>

          <div>
            <img src="<?= base_url('assets/'); ?>img/landing/work3.png" alt="" class="skills__img" />
          </div>
        </div>
      </section>

      <!--===== WORK =====-->
      <section class="work section" id="work">
        <h2 class="section-title">Seminars</h2>

        <div class="work__container bd-grid">
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/1.jpg" alt="" />
          </div>
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/2.jpg" alt="" />
          </div>
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/3.jpg" alt="" />
          </div>
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/4.jpg" alt="" />
          </div>
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/5.jpg" alt="" />
          </div>
          <div class="work__img">
            <img src="<?= base_url('assets/'); ?>img/seminar/6.jpg" alt="" />
          </div>
        </div>

        <p>Click below to</p>
      </section>

      <!-- ==== REGIST BUTTON ====-->
      <a class="regist" href="https://form.jotform.com/213313855529054" target="blank">
        <h1 href class="button-regist">Regist Seminar</h1>
      </a>

    
      <!--===== FOOTER =====-->
      <footer class="footer" id="footer">
        <p class="footer__title">Seminario</p>
        <div class="footer__social">
          <a href="#" class="footer__icon"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="footer__icon"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="footer__icon"><i class="bx bxl-twitter"></i></a>
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
      </footer>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
  </body>
</html>
