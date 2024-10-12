<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'HISTORY OF GURIELI'; 
    include $root . 'includes/header.php';

?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
</head>

<div class="slider-container" id="slider2">
        <div class="left-bar">
            <div class="bullets">
                <div class="bullet active"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
            </div>
            <div class="lang-switch">
                <a href="#" class="active">ENG</a>
                <a href="#">GEO</a>
            </div>
        </div>

        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/agriculture.jpg)">
            <div class="content active">
                <h4 class="small-desc">GEORGIAN TRADITION</h4>
                <h1 class="heading">TEA MAKING CULTURE INSPIRED <br> BY THE HISTORY</h1>
                <p class="description">From the beginning it was back in 1809, two hundred years <br> ago, first tea plant was brought to Georgia</p>
                <button class="btn-light"><a href="#"> Read More </a></button>
            </div>
        </div>

        <div class="right-bar">
            <div class="social-icons">
            <a href="" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/facebook.png" alt="Facebook"></a>
            <a href="" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/instagram.png" alt="Instagram"></a>
            <a href="" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/linkedin.png" alt="LinkedIn"></a>
            <a href="" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/youtube.png" alt="YouTube"></a>
            </div>
        </div>
    </div>




    <script src="<?php echo $root;?>assets/scripts/sliders.js"></script>
