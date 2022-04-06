
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
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
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
	
    <style>
        body {
          font-family: "Lato", sans-serif;
        }
        
        .sidenav {
          height: 100%;
          width: 440px;
          padding-left: 20px;
          padding-right: 20px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #3c3d59;
          overflow-x: hidden;
          padding-top: 140px;
        }
        
        .sidenav a {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .main {
          margin-left: 160px; /* Same as the width of the sidenav */
          font-size: 28px; /* Increased text to enable scrolling */
          padding: 0px 10px;
          padding-left: 340px;
          padding-right: 50px;
          padding-top: 140px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
    
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
    
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" style="background-color: #6872a6;">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="main.html"><img src="logo_PT.png" alt="alternative" style="height: 50px; width: 50px;" ></a><span style="color: white;">PIKIRANKU TRAVELING</span>
        
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
                    <a class="nav-link dropdown-toggle page-scroll" href="#rekomendasi" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">REKOMENDASI</a>
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
</div>
<div class="sidenav">
<!-- Contact Form -->
<form id="feedbackForm" data-toggle="validator" method="POST" data-focus="false">
    <div class="form-group">
        <textarea class="form-control-textarea" name="komen" id="cmessage" required></textarea>
        <label class="label-control" for="cmessage">Your message</label>
        <div class="help-block with-errors"></div>
    </div>
    
    <div class="form-group">
        <button type="submit" class="form-control-submit-button" onclick="submitkomen()">SUBMIT MESSAGE</button>
    </div>
    <div class="form-message">
        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
    </div>
</form>
<!-- end of contact form -->
</div>

<script>
    var submitkomen =  function(){
 <?php
// data dari form

$komen = $_POST['komen'];


//1.
$k = new PDO("mysql:host=localhost;dbname=projek_web", "root", "");


//2.
$sql = "INSERT INTO komen (komen)
        VALUES (?)";

//3.
$result = $k->prepare($sql);
$result->execute([$komen]);
?>}
</script>


<div class="main" style="padding-bottom: 20px;">
    <div class="section-title" style="justify-content: center; text-align: center; margin-bottom: 5px;">FEEDBACKS</div>
    <?php

//Tahap 1.
$a = "mysql:host=localhost;dbname=projek_web";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

//Tahap 2. 
$sql = "SELECT * FROM komen";

//Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute();

?>
<?php
$i = 1;
while($row = $hasil->fetch()):
?>

    <!-- Contact Form -->
    <form id="feedbackform" data-toggle="validator" data-focus="false">

        <div class="form-group">
            <label style="font-size: 15px; text-decoration: underline; margin-left: 5px; ">Anonymous</label>
            <textarea class="form-control-textarea" id="cmessage" style="resize: none;" disabled><?php echo $row['komen']; ?></textarea>
            <div class="help-block with-errors"></div>
        </div>
    </form>
<?php
$i++;
endwhile;
?>

</div>
 
    	
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