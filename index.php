<?php
    $root = dirname(__DIR__) . '/'; 
    $pageTitle = 'GUfRIELI';
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/home.css">
</head>
<body class="home">
    <div class="slider-container" id="slider1">
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
            <div class="content active fade-in">
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
        <img class="born-in-georgia" src="<?= $root ?>assets/imgs/born-in-georgia.png" alt="born in georgia tea"></a>
    </div>


    <!-- home about content  -->
    <section class="home-about fade-in">
        <div class="home-about-img"><img src="<?= $root ?>assets/imgs/home-about.png"> </div>
        <div class="about-content fade-in"> 
            <h2 class="heading">HISTORY OF GURIELI</h2>
            <p class="txt">From the beginning it was back in 1809, two-hundred years
                ago, Prince Mamia V Gurieli (1809-1826), last ruler of Guria
                principality in Western Georgia, took great interest in transforming and developing the agricultural sector. <br /> 
                Following the advice given by the French botanists Andre Michaux and his son Francois Andre Michaux, 
                who were the first to bring the tea plant to the United States in 1799, the Prince ordered the first Tea - Camellia
                Sinensis samples. These were brought to his botanical garden by the Scotsman Jacob Montague Marr, together with other exotic
                plants. Cultivation of this once unknown plant
                has laid the grounds for the development of what in the following decades became one of the biggest agricultural industries in Georgia.</p>
            <button class="btn-dark">
                <a href="#">READ MORE</a>
            </button>
        </div>
    </section>
    

    <!-- home product slider  -->
    <div class="home-product-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide fade-in">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product2.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">TRADITIONAL
                    BLACK</h3>
                    <p class="txt">Available in different formats<br>Prince Gurieli edition</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product3.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">TRADITIONAL GREEN</h3>
                    <p class="txt">Available in different formats<br> Prince Gurieli edition</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product4.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">EARL GREY</h3>
                    <p class="txt">Available in different formats,<br>Prince Gurieli edition</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product5.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">ALPINE BERRY</h3>
                    <p class="txt">Available in different formats, <br>Prince Gurieli edition</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product6.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">TRADITIONAL BLACK</h3>
                    <p class="txt">Available in different formats, Gurieli</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product7.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">TRADITIONAL GREEN</h3>
                    <p class="txt">Available in different formats, Gurieli</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product8.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">EARL GREY</h3>
                    <p class="txt">Available in different formats, Gurieli</p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product8.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">ALPINE BERRY</h3>
                    <p class="txt">Available in different formats, Gurieli</p>
                </div>
            </div>
            <!-- Arrows -->
            <div class="swiper-button-next">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Next">
            </div>
            <div class="swiper-button-prev">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Previous">
            </div>
        </div>
    </div>
    

    <!-- RESOURCES -->
    <section class="home-resources">
        <div class="about-content fade-in"> 
            <h2 class="heading">OUR RESOURCES</h2>
            <p class="txt">Our factory is located in Ozurgeti, Guria. Gurieli tea is produced in our own production units equipped with
                state-of-the art machinery from TI Global (India) for the primary production of both black and green teas,
                blending and flavoring facilities, packing machinery from IMA S.p.A (Italy), Marden Edwards (Great Britain), Fuso (Japan). <br><br>
                The new packing factory was opened in September 2015, equipped with the best , modern machinery. It’s working at full capacity
                in order to provide better and more diverse packaging for our exclusive products. 
            </p>
            <button class="btn-dark">
                <a href="#">READ MORE</a>
            </button>
        </div>
        <div class="home-about-img"><img src="<?= $root ?>assets/imgs/resources-bg.png"> </div>
    </section>

    <?php include 'includes/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo $root;?>assets/scripts/sliders.js"></script>
    <script src="<?php echo $root;?>assets/scripts/animate.js"></script>
</body>
</html>
