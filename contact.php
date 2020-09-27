<!DOCTYPE <!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Gligorijević</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Djordje Gligorijevic"/>
    <meta name="keywords" content="veb dizajn, veb programiranje, responzivni veb sajt, web site development, frilenser Jagodina"/>
    <meta name="description" content="Ja sam iskusan veb dizajner i programer iz Jagodine koji pomaze malim biznisima da zablistaju na internetu..."/>
    <meta name="og:title" content="Gligorijević Veb dizajner i Programer Jagodina Srbija">
    <meta name="robots" content="Veb dizajner i Programer Jagodina Srbija">
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/style.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Orbitron"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,700"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="icon" href="icon.png" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
        <img src="logo.png" alt="logo_preloader">
      </div>
      <!-- Preloader -->
    <div id="nav-container" class="fluid-container">
      <header id="header">
        <div class="container">
          <div id="logo">
            <a href="index.html">G</a>
          </div>
          <nav id="nav">
            <ul>
              <li><a href="http://gligorijevicdj.com/index.php">Početna</a></li>
              <li><a href="about.html">O meni</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="#" class="active">Kontakt</a></li>
              <li class="menu-icon"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
            </ul>
          </nav>
        </div>
      </header>
    </div>

    <div class="container">
      <section id="main-section-about">
        <h1><span>Gligorijević</span> - Kontakt</h1>
        <hr />
      </section>

       <section id="form">
        <form action="contactform.php" method="POST">
          <input type="text" placeholder="Ime" name="name" required pattern="^[a-zA-Z\s]+$"/>
          <br /><br />
          <input type="email" placeholder="E-mail" name="mail" required/>
          <br /><br />
          <textarea cols="30" rows="10" placeholder="Poruka" name="subject" required></textarea>
          <br /><br />
          <input type="submit" value="Pošalji" name="submit"/>
        </form>
      </section>

        <section id="contact-info">
            <div class="box">
                <i class="fas fa-map-marker-alt fa-3x" data-aos="fade-right" data-aos-duration="2000"></i>
                <p>35000 Jagodina, Srbija</p>
            </div>

            <div class="box">
                <i class="fas fa-at fa-3x" data-aos="fade-down" data-aos-duration="2000"></i>
                <p>itdjordjegligorijevic@gmail.com</p>
            </div>

            <div class="box">
                <i class="fas fa-mobile-alt fa-3x" data-aos="fade-left" data-aos-duration="2000"></i>
                <p>+381 60 078 2882</p>
            </div>
        </section>

      <footer id="footer">
        <p>Copyright &copy; <span class="year"></span> <span class="footer-bg">Gligorijević</span>. Sva prava zadržana.</p>
      </footer>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
