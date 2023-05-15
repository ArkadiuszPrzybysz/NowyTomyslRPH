<?php

  include 'config.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="Arkadiusz Przybysz">

  <title>Najpiękniej przystrojona choinka</title>

  <link rel="stylesheet" href="navbar.css">

  <link rel="stylesheet" href="galeria.css">

  <link rel="shortcut icon" href="images/design/logo-icon.png" type="image/x-icon">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="swiper-bundle.min.css">

  <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">

</head>

<body>

<nav class="navbar">

<a href="https://nowytomyslrph.pl/" class="logo">RPH</a>

<div class="nav-links mobile-menu">

  <ul>

    <li><a href="https://nowytomyslrph.pl/#o_nas">O nas</a></li>

    <li><a href="https://nowytomyslrph.pl/#przekaz">Przekaż 1,5% na RPH</a></li>

    <li><a href="https://nowytomyslrph.pl/#galeria">Galeria</a></li>

    <li><a href="https://nowytomyslrph.pl/#odeszli">Odeszli na wieczną wartę</a></li>

    <li><a href="https://nowytomyslrph.pl/#dokumenty">Dokumenty</a></li>

    <li><a href="#kontakt">Kontakt</a></li>

  </ul>

</div>

<div class="menu-btn">

  <div class="menu-btn-burger"></div>

</div>

</nav>

  <main>

  <span class="text" id="text1">Najpiękniej przystrojona choinka</span>
  
  <img id="forest1" src="images/design/parallax2.png"  alt="obraz1">

    <div class="arrow-box">

      <span></span>

      <span></span>

      <span></span>

    </div>

  </main>

  <div class="container-category">

    <div class="box">

      <div class="gallery">

      <?php

      $wynik = $conn->query("SELECT * FROM galeria WHERE kategoria = 'choinka' AND id = 18");

      while($row = $wynik->fetch_assoc()){

      ?>

        <a href = "<?php echo $row["obraz"];?>"><img src="<?php echo $row["obraz"];?>" alt="gallery image" class="reveal" loading="lazy"></a>

        <?php } $conn -> close(); ?>

      </div>



      <?php

      include 'config.php';

      ?>

      <div class="gallery">

      <?php

      $wynikA = $conn->query("SELECT * FROM galeria WHERE kategoria = 'choinka' AND id BETWEEN 19 AND 20");

      while($rowA = $wynikA->fetch_assoc()){

      ?>

        <a href = "<?php echo $rowA["obraz"];?>"><img src="<?php echo $rowA["obraz"];?>" alt="gallery image" class="reveal" loading="lazy"></a>

        <?php } $conn -> close(); ?>

      </div>



      <?php

      include 'config.php';

      ?>

      <div class="gallery">

      <?php

      $wynikA = $conn->query("SELECT * FROM galeria WHERE kategoria = 'choinka' AND id = 21");

      while($rowA = $wynikA->fetch_assoc()){

      ?>

        <a href = "<?php echo $rowA["obraz"];?>"><img src="<?php echo $rowA["obraz"];?>" alt="gallery image" class="reveal" loading="lazy"></a>

        <?php } $conn -> close(); ?>

      </div>

    </div>

  </div>


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

    <script src="navBtn.js"></script>

  <script src="galeria.js"></script>

  <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>

  <script src="light_box.js"></script>

  <script>

  AOS.init();

  </script>

</body>

</html>