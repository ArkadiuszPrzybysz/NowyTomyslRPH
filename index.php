<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="Arkadiusz Przybysz">

  <title>Strona główna</title>

  <link rel="stylesheet" href="navbar.css">

  <link rel="stylesheet" href="index.css">

  <link rel="shortcut icon" href="images/design/logo-icon.png" type="image/x-icon">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="swiper-bundle.min.css">

</head>

<body>

  <?php

    include 'navbar.php';

  ?>

<!-- Główna strona -->

  <main>

  <span id = "text1" class="text">Rada przyjaciół harcerstwa</span>

  <img id="forest1" src="images/design/parallax2.png"  alt="obraz1">

  </main>
  
  <!-- Logo -->
  
  <div class="logo-section">
      
  <img src="images/design/logo2.png" alt="logo">
  
  </div>
  
  <!-- O nas -->

  <div class="about-us" id="o_nas">

  <div class="about-img" data-aos="fade-down">

  <img src="images/design/scouts1-min.jpg" alt="scouts1" loading="lazy">

  </div>

  <div class="about-text">

  <h1 data-aos="zoom-in">Rada Przyjaciół Harcerstwa „Watra” im. Powstańców Wielkopolskich w Nowym Tomyślu</h1>

  <p data-aos="zoom-in">Została powołana 19 marca 2003 r. Założycielami stowarzyszenia byli: Urszula Bondarowicz,

Henryk Helwing, Daniela Kołdyk, Zdzisław Mizerski, Andrzej Pieniężny, Dorota Piechota,

Barbara Siwińska, Jerzy Tyc, Stefan Wojtkiewicz.

Rada Przyjaciół Harcerstwa jest kontynuatorem harcerskich tradycji pokoleniowych i współdziała ze

wszystkimi środowiskami. RPH jest stowarzyszeniem OPP- non profit o dwudziestoletniej

działalności, których członkowie aktywnie działają na rzecz lokalnego środowiska.</p>

  </div>

  </div>

  <div class="about-us_2">

  <div class="about-text_2">

  <h1 data-aos="zoom-in">RPH organizuje zielone szkoły i szkoły przetrwania w bazach i stanicach harcerskich, rozwija zainteresowania związane z ekologią i ochroną środowiska.</h1>

  <p data-aos="zoom-in">Podtrzymuje tradycje

narodowe. Rozwija świadomość obywatelską, narodową i kulturową poprzez organizowanie

w ramach kół poetyckich spotkań, wystaw odczytów, wycieczek itp.

Członkowie RPH pracują i działają całkowicie społecznie, wykorzystując swoją wiedzę i

doświadczenie. Rada Przyjaciół Harcerstwa organizuje wystawy, uroczystości patriotyczne,

państwowe, szkolne i harcerskie. RPH wraz z harcerzami i instruktorami organizuje pomoc w

zakresie zbiórki żywności oraz wypoczynku i nauki dla dzieci, młodzieży, zuchów i

harcerzy.</p>

  </div>

  <div class="about-img_2" data-aos="fade-down">

  <img src="images/design/scouts2-min.jpg" alt="scouts2" loading="lazy">

  </div>

  </div>

  <div class="about-us">

  <div class="about-img" data-aos="fade-down">

  <img src="images/design/scouts3-min.jpg" alt="scouts3" loading="lazy">

  </div>

  <div class="about-text">

  <h1 data-aos="zoom-in">RPH współpracuje z Ośrodkami Pomocy Społecznej na terenie powiatu nowotomyskiego oraz z jednostkami samorządów lokalnych</h1>

  <p data-aos="zoom-in">Rada Przyjaciół Harcerstwa

szeroko promuje harcerstwo oraz ideały i metody harcerskiego wychowania dzieci i

młodzieży w szacunku dla ludzi i otaczającego nas świata zgodnie z Prawem Harcerskim i

Zobowiązaniem Instruktorskim.

Rada Przyjaciół Harcerstwa „Watra” im. Powstańców Wlkp. działa i rozwija się zgodnie z

maksymą Roberta Baden Powella założyciela skautingu, który powiedział:

„Starajmy się zostawić ten świat trochę lepszym, niż go zastaliśmy”</p>

  </div>

  </div>

  <!-- Przekaz 1,5% -->

  <div class="support" id="przekaz">

    <div class="support-box" data-aos="flip-down">

      <h1>Przkaż 1,5% na RPH</h1>

      <hr>

      <p><b>NAZWA:</b> RADA PRZYJACIÓŁ HARCERSTWA „WATRA” IM.POWSTAŃCÓW WIELKOPOLSKICH W NOWYM TOMYŚLU</p>

      <p><b>NUMER KRS:</b> 0000168396</p> 

    </div>

  </div>

  <!-- Galeria -->

  <div class="section-photo" id="galeria">

        <div class="photo">

        <div class="itemBox" style="background-image: url(images/wolsztyn/Wolsztyn6.jpg)">

                    <div class="gallery-info">

                        <h1 data-aos="fade-down">Wolsztyn</h1>
                        <p data-aos="zoom-in">"Wolsztyn - skansen i parowozownia"</p>
                        <button onclick="window.location.href='wolsztyn';">Więcej zdjęć</button>

                    </div>

                </div>

        <div class="itemBox" style="background-image: url(images/choinka/Choinka1.jpg)">

                    <div class="gallery-info">

                        <h1 data-aos="fade-down">Choinka</h1>
                        <p data-aos="zoom-in">"Najpiękniej przystrojona choinka"</p>
                        <button onclick="window.location.href='choinka';">Więcej zdjęć</button>

                    </div>

                </div>
        </div>
</div>

<!-- Odeszli -->

        <div class="testi-container" id="odeszli">
        <div class="testimonial mySwiper">
          <div class="testi-content swiper-wrapper">
          <?php

include 'config.php';


$wynik = $conn->query("SELECT * FROM odeszli");



while($row = $wynik->fetch_assoc()){



?>
            <div class="slide swiper-slide">
              <img src="<?php echo $row["obraz"];?>" alt="osoba" data-aos="zoom-in" loading="lazy">
              <p data-aos="fade-up"><?php echo $row["opis"];?></p>
              <i class="bx bxs-quote-alt-left quote-icon" data-aos="fade-up"></i>

              <div class="details">
                <span data-aos="fade-up" class="name"><?php echo $row["imie"];?> <?php echo $row["nazwisko"];?></span>
                <span data-aos="fade-up" class="job"><?php echo $row["czesc"];?></span>
              </div>
            </div>
            <?php } $conn -> close(); ?>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>

        <!-- Dokumenty -->

        <section id="dokumenty">
      <div class="row">
        <h2 data-aos="zoom-in" class="section-heading">Dokumenty</h2>
      </div>
      <div class="row">
        <div class="column">
          <div class="card" onclick="myhref('docs/Sprawozdanie merytoryczne 22.pdf');">
            <div class="icon-wrapper">
            <i class='bx bx-money'></i>
            </div>
            <h3>Sprawozdanie finansowe za rok 2022</h3>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="myhref('docs/Deklaracja-Czlonkowska-Stowarzyszenia-N.docx.pdf');">
            <div class="icon-wrapper">
            <i class='bx bx-paperclip' ></i>
            </div>
            <h3>Deklaracja Członkowska Stowarzyszenia</h3>
          </div>
        </div>
        <div class="column">
          <div class="card" onclick="myhref('docs/Statut RPH 2022.pdf');">
            <div class="icon-wrapper">
            <i class='bx bx-list-ol'></i>
            </div>
            <h3>Statut RPH 2022</h3>
          </div>
        </div>
      </div>
    </section>
    
      <!-- Zarząd -->

  <div class="info-box" id="zarzad">

    <div class="info-content">

      <div class="info-names" data-aos="fade-right">

        <h1>Członkowie zarządu</h1>
        
        <hr>

        <p><b>Emilia Agata Majewicz</b> - przewodnicząca zarządu</p>

        <p><b>Dorota Romualda Piechota</b> - zastępca przewodniczącej zarządu</p>

        <p><b>Ewa Maria Wojtanowska</b> - sekretarz zarządu</p>

      </div>

    <div class="info-names" data-aos="fade-left">

        <h1>Komisja rewizyjna</h1>

        <hr>

        <p><b>Agnieszka Kańduła</b> - przewodnicząca</p>

        <p><b>Maria Urszula Stunżo</b> - członek</p>

        <p><b>Henryka Teresa Tomaszuk</b> - sekretarz</p>

    </div>

  </div>

  </div>

    <!-- Kontakt -->

    <footer id="kontakt">
        <div id="footer_content">
            <ul class="footer-list">
                <li>
                    <h3>Kontakt</h3>
                </li>
                <li>
                <i class="card-icon bx bxs-phone"></i><a href="#" class="footer-link disabled"> +48 609 694 930 / +48 600 917 157</a>
                </li>
                <li>
                <i class="card-icon bx bxs-envelope"></i><a href="#" class="footer-link disabled"> rph2@tlen.pl</a>
                </li>
                <li>
                <i class="card-icon bx bxs-location-plus"></i><a href="#" class="footer-link disabled">ul. Os. Północ 25/2 (Szkoła Podstawowa nr 3) 64-300 Nowy Tomyśl</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Dane</h3>
                </li>
                <li>
                <i class="card-icon bx bxs-bank"></i><a href="#" class="footer-link disabled">NRB: BGŻ BNP PARIBAS ODDZIAŁ GRODZISK WLKP. 97 2030 0045 1110 0000 0270 4950</a>
                </li>
                <li>
                <i class='bx bx-spreadsheet'></i><a href="#" class="footer-link disabled">Faktura: RPH „Watra”, im. Powstańców Wlkp. w Nowym Tomyślu ul. Os. Północ 25/2, 64-300 Nowy Tomyśl, NIP: 788-187-18-26</a>
                </li>
            </ul>
        </div>

        <div id="footer_copyright">
            &#169
            2023 Rada Przyjaciół Harcerstwa
        </div>
    </footer>
      
        
  <script src="forest.js"></script>
  <script src="swiper-bundle.min.js"></script>
  <script src="carousel.js"></script>
  <script type="text/javascript">
  function myhref(web) {
    window.open(web);
  }
</script>

  

  <script>

  AOS.init();

  </script>

</body>

</html>