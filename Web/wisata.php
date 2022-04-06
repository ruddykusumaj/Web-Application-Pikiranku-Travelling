<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Pikiranku Traveling is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
  <meta name="author" content="Inovatik">

  <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
  <meta property="og:site_name" content="" /> <!-- website name -->
  <meta property="og:site" content="" /> <!-- website link -->
  <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
  <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
  <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
  <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
  <meta property="og:type" content="article" />

  <!-- Website Title -->
  <title>Pikiranku Traveling</title>

  <!-- Styles -->
  <script src="https://kit.fontawesome.com/c593721c74.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/swiper.css" rel="stylesheet">
  <link href="css/magnific-popup.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="logo_PT.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

  <!-- Preloader -->
  <div class="spinner-wrapper">
    <div class="spinner">
      <img class="rotate_03" src="logo_PT.png">
    </div>
  </div>
  <!-- end of preloader -->


  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="main.html"><img src="logo_PT.png" alt="alternative" style="height: 50px; width: 50px;"></a><span style="color: white;">PIKIRANKU TRAVELING</span>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="main.html">HOME <span class="sr-only">(current)</span></a>
        </li>
        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle page-scroll" href="#Discover" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">REKOMENDASI</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="wisata.php"><span class="item-text">WISATA</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="kuliner.php"><span class="item-text">KULINER</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="penginapan.php"><span class="item-text">PENGINAPAN</span></a>

          </div>
        </li>
        <!-- end of dropdown menu -->
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#projects">KATEGORI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="about.html">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="feedback.php">FEEDBACK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="index.html">SIGN OUT</a>
        </li>
      </ul>
      <span class="nav-item social-icons">
        <span class="fa-stack">
          <a href="https://www.facebook.com/PikirankuTravel">
            <span class="hexagon"></span>
            <i class="fab fa-facebook-f fa-stack-1x"></i>
          </a>
        </span>
        <span class="fa-stack">
          <a href="#your-link">
            <span class="hexagon"></span>
            <i class="fab fa-twitter fa-stack-1x"></i>
          </a>
        </span>
      </span>
    </div>
  </nav> <!-- end of navbar -->
  <!-- end of navbar -->


  <!-- Header -->
  <header id="header" class="header">
    <div class="header-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-container">
              <h1>WISATA</h1>
              <a class="btn-solid-lg page-scroll" href="#rekomendasi">DISCOVER</a>
            </div>
          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of header-content -->
  </header> <!-- end of header -->
  <!-- end of header -->


  <!-- TESTING -->

  <!-- Services -->
  <style>
    div.b {
      word-wrap: break-word;
    }
  </style>

  <div id="rekomendasi" class="cards-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">Rekomendasi</div>
          <h2>Rekomendasi Wisata<br> That Suits Your Needs</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->


      <div class="row">
        <div class="col-lg-12 scrolling-wrapper">
          <?php


          //Tahap 1.
          $a = "mysql:host=localhost;dbname=projek_web";
          $b = "root";
          $c = "";
          $kunci = new PDO($a, $b, $c);

          //Tahap 2. 
          $sql = "SELECT * FROM wisata_list";

          //Tahap 3.
          $hasil = $kunci->prepare($sql);
          $hasil->execute();


          ?>
          <?php
          $i = 1;
          while ($row = $hasil->fetch()) :
            $img_src = $row['foto_wisata'];
          ?>

            <!-- Card -->
            <div class="card">
              <div class="card-image">
                <img class="img-fluid" src="<?php echo $img_src; ?>" style="width: 400px; height: 200px" alt="" title="<?php echo $img_name; ?>" />

              </div>
              <div class="card-body">
                <h3 class="card-title"><?php echo $row['Nama_wisata']; ?></h3>
                <!-- <p class="price">Starting at <span>Rp.299.000</span></p> -->
                <p style="text-align: center;"><?php echo $row['rangkuman']; ?></p>
              </div>
              <input type="hidden" id="id" name="id" value="">

              <div class="button-container">
                <button class="btn-solid-reg popup-with-move-anim" onclick="window.location.href='Konten/wisata_konten.php?id=<?= $row['wisata_id'] ?>'">DETAILS</button>
              </div> <!-- end of button-container -->


            </div>
            <!-- end of card -->
          <?php
            $i++;
          endwhile;
          ?>


        </div> <!-- end of col -->
      </div> <!-- end of row -->

    </div> <!-- end of container -->
  </div> <!-- end of cards-2 -->
  <!-- end of services -->




  <!-- Description -->

  <div id="Discover" class="form-3">
    <div class="container">
      <div class="section-title">DISCOVER</div>
    </div>

    <div class="cards-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <!-- Card -->
            <div class="card">
              <span class="fa-stack">
                <a href="kuliner.php">
                  <span class="hexagon"></span>
                  <i class="fas fa-utensils fa-stack-1x"></i>
                </a>
              </span>
              <div class="card-body">
                <h4 class="card-title">Kuliner</h4>
                <p>Rekomendasi kuliner disekitar anda, Makanan khas lokal dan sebagainya.</p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <span class="fa-stack">
                <a href="penginapan.php">
                  <span class="hexagon"></span>
                  <i class="fas fa-suitcase fa-stack-1x"></i>
                </a>
              </span>
              <div class="card-body">
                <h4 class="card-title">Penginapan</h4>
                <p>Penginapan yang kami rekomendasi kan merupakan tempat yang sudah terjamin dan terjangkau. </p>
              </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
              <span class="fa-stack">
                <a href="wisata.php">
                  <span class="hexagon"></span>
                  <i class="fas fa-route fa-stack-1x"></i>
                </a>
              </span>
              <div class="card-body">
                <h4 class="card-title">Wisata</h4>
                <p>
                  wisata lokal paling memanjakan mata, jelajahi keindahan alam maupun arsitektur indonesia yang beragam
                </p>
              </div>
            </div>
            <!-- end of card -->

          </div> <!-- end of col -->
        </div> <!-- end of row -->
      </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
  </div>
  <!-- end of description -->


  <!-- Projects -->
  <div id="projects" class="filter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">KATEGORI</div>
          <h2>Kategori Destinasi</h2>
        </div> <!-- end of col -->
      </div> <!-- end of row -->
      <div class="row">
        <div class="col-lg-12">
          <!-- Filter -->
          <div class="button-group filters-button-group">
            <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
            <a class="button" data-filter=".pantai"><span>PANTAI</span></a>
            <a class="button" data-filter=".gunung"><span>GUNUNG</span></a>
            <a class="button" data-filter=".monumen"><span>MONUMEN</span></a>
            <a class="button" data-filter=".danau"><span>DANAU</span></a>
          </div> <!-- end of button group -->
          <div class="grid">
            <div class="element-item danau">
              <a class="popup-with-move-anim" href="#project-1">
                <div class="element-item-overlay"><span>Danau</span></div><img src="../Foto Tempat Liburan/Danau.png" alt="alternative">
              </a>
            </div>
            <div class="element-item gunung danau">
              <a class="popup-with-move-anim" href="#project-2">
                <div class="element-item-overlay"><span>Gunung</span></div><img src="../Foto Tempat Liburan/gunung n danau 2.png" alt="alternative">
              </a>
            </div>
            <div class="element-item pantai">
              <a class="popup-with-move-anim" href="#project-3">
                <div class="element-item-overlay"><span>Pantai</span></div><img src="../Foto Tempat Liburan/gunung n pantai.jpg" alt="alternative">
              </a>
            </div>
            <div class="element-item monumen">
              <a class="popup-with-move-anim" href="#project-4">
                <div class="element-item-overlay"><span>Monumen</span></div><img src="../Foto Tempat Liburan/monjali.png" alt="alternative">
              </a>
            </div>
            <div class="element-item pantai">
              <a class="popup-with-move-anim" href="#project-5">
                <div class="element-item-overlay"><span>Pantai</span></div><img src="../Foto Tempat Liburan/pantai.jpg" alt="alternative">
              </a>
            </div>
            <div class="element-item danau gunung">
              <a class="popup-with-move-anim" href="#project-6">
                <div class="element-item-overlay"><span>Danau</span></div><img src="../Foto Tempat Liburan/gunung n danau.png" alt="alternative">
              </a>
            </div>
            <div class="element-item monumen">
              <a class="popup-with-move-anim" href="#project-7">
                <div class="element-item-overlay"><span>Monumen</span></div><img src="../Foto Tempat Liburan/monumen.png" alt="alternative" style="width: 722px; height: 704;">
              </a>
            </div>
            <div class="element-item gunung">
              <a class="popup-with-move-anim" href="#project-8">
                <div class="element-item-overlay"><span>Gunung</span></div><img src="../Foto Tempat Liburan/gunung.png" alt="alternative">
              </a>
            </div>
          </div> <!-- end of grid -->
          <!-- end of filter -->

        </div> <!-- end of col -->
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of filter -->
  <!-- end of projects -->



  <!-- Project Lightboxes -->
  <!-- Lightbox -->
  <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/Danau.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Danau adalah cekungan luas di permukaan bumi yang terisi oleh air dan terbentuk akibat adanya proses tektonik atau vulkanik. Air danau dapat berasal dari air sungai, air tanah, air hujan atau mata air yang bermuara di cekungan tersebut. Berdasarkan proses terjadinya, danau terbagi menjadi dua yaitu danau alami dan danau buatan. </p>
        <p>
          Danau Tektonik, terbentuk oleh proses-proses tektonik seperti lipatan, patahan, dan gerakan kulit Bumi, sehingga terjadi penurunan. Contoh: Danau Takengon, Danau Singkarak, Danau Kerinci, Danau Poso, dan Danau Towuti. </p>

        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/gunung n danau 2.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Danau adalah cekungan luas di permukaan bumi yang terisi oleh air dan terbentuk akibat adanya proses tektonik atau vulkanik. Air danau dapat berasal dari air sungai, air tanah, air hujan atau mata air yang bermuara di cekungan tersebut. Berdasarkan proses terjadinya, danau terbagi menjadi dua yaitu danau alami dan danau buatan. </p>
        <p>
          Danau Vulkanik, terbentuk dari aktifitas vulkanik (gunung berapi) yang mengakibatkan runtuhnya kaldera dan erupsi eksplosif yang dapat memindahkan material di dalam pusat erupsi dengan jumlah yang besar, lalu membentuk cekungan kemudian terisi air. Contoh : Danau Tondano, Danau Segara Anakan, Danau Kelimutu, Danau Maninjau, dan Danau Tolire. </p>
        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/gunung n pantai.jpg" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Pantai atau pesisir (Inggris: beach) adalah sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut. Daerah pantai menjadi batas antara daratan dan perairan laut.[1] Kawasan pantai berbeda dengan pesisir walaupun antara keduanya saling berkaitan. Panjang garis pantai ini diukur mengeliling seluruh pantai yang merupakan daerah teritorial suatu negara.

          Menurut koreksi PBB tahun 2008, Indonesia merupakan negara dengan garis Pantai terpanjang keempat di dunia setelah Amerika Serikat (USA), Kanada dan Rusia. Panjang garis pantai Indonesia tercatat sebesar 95.181 km. </p>
        <p>
          Pantai Landai, yaitu Pantai yang memiliki ciri khas yang permukaannya relatif datar. Pantai jenis ini biasanya adalah Hutan Mangrove, Pantai Bukit Pasir, Pantai Delta, dan Pantai Estuari. </p>
        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/monjali.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Monumen sering kali dirancang untuk memuat informasi politik bersejarah, sebagai bangunan untuk memperkuat citra keunggulan kekuatan politik, seperti Pilar Trajan, atau berbagai patung Lenin di Uni Soviet. Monumen dapat berusia ribuan tahun, sebagai simbol yang bertahan lama suatu peradaban purba. Piramida Mesir Kuno, Parthenon Yunani Kuno, dan Moai di Pulau Paskah telah menjadi simbol dari peradaban purba tersebut. Di zaman yang lebih modern, Patung Liberty dan Menara Eiffel telah menjadi lambang negara dan kota modern. Istilah monumentalitas berkaitan dengan status simbolik dan fisik keberadaan suatu monumen. </p>

        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/pantai.jpg" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Pantai atau pesisir (Inggris: beach) adalah sebuah bentuk geografis yang terdiri dari pasir, dan terdapat di daerah pesisir laut. Daerah pantai menjadi batas antara daratan dan perairan laut.[1] Kawasan pantai berbeda dengan pesisir walaupun antara keduanya saling berkaitan. Panjang garis pantai ini diukur mengeliling seluruh pantai yang merupakan daerah teritorial suatu negara.

          Menurut koreksi PBB tahun 2008, Indonesia merupakan negara dengan garis Pantai terpanjang keempat di dunia setelah Amerika Serikat (USA), Kanada dan Rusia. Panjang garis pantai Indonesia tercatat sebesar 95.181 km. </p>
        </p>
        <p>
          Pantai Curam, yaitu Pantai yang bergunung gunung. Pantai ini bisa terbentuk disebabkan peretakan yang memanjang sejajar Pantai yang terkikis oleh ombak besar, sehingga menciptakan tebing tebing curam dan laut dalam. </p>
        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/gunung n danau.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Danau adalah cekungan luas di permukaan bumi yang terisi oleh air dan terbentuk akibat adanya proses tektonik atau vulkanik. Air danau dapat berasal dari air sungai, air tanah, air hujan atau mata air yang bermuara di cekungan tersebut. Berdasarkan proses terjadinya, danau terbagi menjadi dua yaitu danau alami dan danau buatan. </p>
        <p>
          Danau Karst, terbentuk akibat proses pelarutan batuan kapur oleh air sehingga membentuk cekungan. Danau Karst yang mempunyai ukuran tidak terlalu luas disebut dengan lokva atau dolina. Lokva yang besar dan luas dinamakan uvala, sedangkan yang lebih luas dari uvala adalah polje. Contoh: Danau Ayamuru, Danau Doline, Danau Juessee, Danau Otjikoto, dan Danau Carran. </p>

        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/monumen.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Monumen adalah jenis bangunan yang dibuat untuk memperingati seseorang atau peristiwa yang dianggap penting oleh suatu kelompok sosial sebagai bagian dari peringatan kejadian pada masa lalu. Seringkali monumen berfungsi sebagai suatu upaya untuk memperindah penampilan suatu kota atau lokasi tertentu. Beberapa ibu kota pusat pemerintahan seperti Washington D.C., New Delhi, dan Brasília memang telah dirancang sedemikian rupa sehingga dibangun meliputi banyak monumen kenegaraan. Lokasi Monumen Washington dirancang untuk membentuk ruang publik yang rapi dan teratur. Bangunan fungsional yang menjadi semakin penting karena usianya, ukurannya, atau makna sejarahnya, dapat juga dianggap sebagai monumen. Dalam hal ini dapat karena ukurannya yang besar atau usianya yang tua seperti contohnya Tembok Besar. Beberapa negara menggunakan istilah "monumen purbakala" untuk merujuk pada situs arkeologi penting, seperti Borobudur. Atau bahkan situs purbakala yang dulunya merupakan kompleks permukiman, seperti situs Pompeii. </p>

        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <img class="img-fluid" src="../Foto Tempat Liburan/gunung.png" alt="alternative" />
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Liburan</h3>
        <hr class="line-heading" />
        <h6>Tempat Liburan</h6>
        <p>
          Gunung adalah suatu bentuk permukaan tanah yang letaknya jauh lebih tinggi daripada tanah-tanah di daerah sekitarnya. Gunung pada umumnya lebih besar dibandingkan dengan bukit, tetapi bukit di suatu tempat bisa jadi lebih tinggi dibandingkan dengan apa yang disebut gunung di tempat yang lain. Gunung pada umumnya memiliki lereng yang curam dan tajam atau bisa juga dikelilingi oleh puncak-puncak atau pegunungan. Pada beberapa ketinggian gunung bisa memiliki dua atau lebih iklim, jenis tumbuh- tumbuhan, dan kehidupan yang berbeda. </p>
        <p>
          Sebenarnya tidak ada definisi umum untuk gunung. Ketinggian, volume, relief, kecuraman, jarak dan kontinuitas dapat dijadikan kriteria dalam mendefinisikan gunung. Menurut KBBI, definisi gunung adalah "Bukit yang sangat besar dan tinggi (biasanya tingginya lebih dari 600 m)" </p>
        <a class="btn-outline-reg mfp-close as-button" href="javascript://">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of lightbox-basic -->
  <!-- end of lightbox -->
  <!-- end of project lightboxes -->


  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text-container about">
            <h4>Few Words About Pikiranku Traveling</h4>
            <p class="white">
              pikiranku traveling merupakan website yang memberikan informasi tentang rekomendasi pariwisata agar para pengguna mendapat gambaran atas destinasi wisata yang akan dituju.
              website ini dibuat agar dapat mempermudah para pengguna untuk mempersiapkan dan mendapat informasi agar siap sedia untuk liburan yang menyenangkan.
              disusun dan dibuat oleh 5 mahasiswa Universitas Multimedia Nusantara angkatan 2019 jurusan sistem informasi yang sedang menempuh pendidikannya di kursi sarjana.

            </p>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-md-2">
          <div class="text-container">
            <h4>Links</h4>
            <ul class="list-unstyled li-space-lg white">
              <li>
                <a class="white" href="https://www.facebook.com/PikirankuTravel">facebook</a>
              </li>
            </ul>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-md-2">
          <div class="text-container">
            <h4>Tools</h4>
            <ul class="list-unstyled li-space-lg">
              <li>
                <a class="white" href="https://www.figma.com/">figma.com</a>
              </li>
            </ul>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
        <div class="col-md-2">
          <div class="text-container">
            <h4>Partners</h4>
            <ul class="list-unstyled li-space-lg">
              <li>
                <a class="white" href="https://elearning.umn.ac.id/">elearning.umn.ac.id</a>
              </li>
            </ul>
          </div>
          <!-- end of text-container -->
        </div>
        <!-- end of col -->
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of footer -->
  <!-- end of footer -->

  <!-- Copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="p-small">
            Copyright ©PikirankuTraveling 2020

          </p>
        </div>
        <!-- end of col -->
      </div>
      <!-- enf of row -->
    </div>
    <!-- end of container -->
  </div>
  <!-- end of copyright -->
  <!-- end of copyright -->


  <!-- Scripts -->
  <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
  <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
  <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
  <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
  <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
  <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
  <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
  <script src="js/scripts.js"></script> <!-- Custom scripts -->
  <!-- <script src="https://kit.fontawesome.com/c593721c74.js" crossorigin="anonymous"></script> -->
</body>

</html>