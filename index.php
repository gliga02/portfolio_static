<!DOCTYPE <!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Djordje Gligorijevic"/>
    <meta name="keywords" content="veb dizajn Jagodina, veb programiranje Jagodina, responzivni veb sajt Jagodina, web site development, frilenser Jagodina"/>
    <meta name="description" content="Ja sam iskusan veb dizajner i programer iz Jagodine koji pomaze malim biznisima da zablistaju na internetu..."/>
    <meta name="og:title" content="Gligorijević Veb dizajner i Programer Jagodina Srbija">
    <meta name="robots" content="Veb dizajner i Programer Jagodina Srbija">
    <title>Gligorijević</title>
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <img src="logo.png" alt="logo_preloader" />
    </div>
    <!-- Preloader -->
    <div id="nav-container" class="fluid-container">
      <header id="header">
        <div class="container">
          <div id="logo">
            <a href="#">G</a>
          </div>
          <nav id="nav">
            <ul>
              <li><a href="#" class="active">Početna</a></li>
              <li><a href="about.html">O meni</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="http://gligorijevicdj.com/contact.php">Kontakt</a></li>
              <li class="menu-icon">
                <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
    </div>

    <div class="container">
      <section id="main-section">
        <h1>
          <span>Gligorijević</span> - Veb dizajner & Programer Srbija Jagodina
        </h1>
        <a href="about.html">Pročitaj više</a>
        <hr />
      </section>

      <section id="about">
        <h3 data-aos="fade-right" data-aos-duration="2000">
          <div></div>
          O meni
        </h3>
        <p>
          Ja sam iskusan veb dizajner i programer iz Jagodine koji pomaze malim biznisima da zablistaju na internetu.
          Vrlo je bitno da se na internetu pojavite sa veb sajtom koji će okarakterisati vašu firmu.
          Važno je dizajnirati sa nekom vrstom ličnosti.
        </p>
        <hr />
      </section>
    </div>

    <div class="fluid-container">
      <section id="skills">
        <div class="container">
          <h3 data-aos="fade-right" data-aos-duration="2000">
            <div></div>
            Usluge
          </h3>
          <p class="p">
            Ako Vam je potrebna neka od usluga ispod, na pravom ste mestu.
          </p>
        </div>

        <div class="box">
          <hr />
          <i
            class="fas fa-code fa-4x"
            data-aos="fade-right"
            data-aos-duration="2000"
          ></i>
          <h2>Web Development</h2>
          <p>
            Izrađujem lepo dizajnirane responzivne veb sajtove, pokrivam i estetski i funkcionalni deo veb stranica kako bi Vašim klijentima bile lake za korišćenje.
          </p>
        </div>

        <div class="box">
          <hr />
          <i
            class="fas fa-poll fa-4x"
            data-aos="fade-down"
            data-aos-duration="2000"
          ></i>
          <h2>Internet Marketing</h2>
          <p>
              Efikasnom upotrebom društvenih mreža kao što su Fejsbuk i Instagram pomoći ću Vam da što više ljudi čuje za Vaš proizvod.
          </p>
        </div>

        <div class="box">
          <hr />
          <i
            class="fas fa-map-pin fa-4x"
            data-aos="fade-left"
            data-aos-duration="2000"
          ></i>
          <h2>SEO Optimizacija</h2>
          <p>
              Pomoći ću Vam da se Vaš veb sajt nađe na vrhu Guglove pretrage, što će Vas postaviti iznad konkurencije na internetu i dovesti nove klijente.
          </p>
        </div>
      </section>
    </div>

    <div class="container">
      <section id="contact">
        <h3 data-aos="fade-right" data-aos-duration="2000">
          <div></div>
          Kontakt
        </h3>
        <p class="p">
          Ugovorite saradnju već danas!
          <br />
          Pišite mi na
          <a class="writeme" href="mailto:itdjordjegligorijevic@gmail.com"
            >itdjordjegligorijevic@gmail.com</a
          >
        </p>
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

      <footer id="footer">
        <p>Copyright &copy; <span class="year"></span> <span class="footer-bg">Gligorijević</span>. Sva prava zadržana.</p>
      </footer>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
