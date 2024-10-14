<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'PRINCE GURIELI'; 
    include $root . 'includes/inside-header.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
</head>

<body class="animated-content">
 <!-- start slider section  -->
 <div class="slider-container animated-content" id="slider3">
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
        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/products-imgs/product-bg.png)"></div>
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
    <!-- end slider section  -->

    <section class="product-page mb-60">
        <div class="product-page-heading">
            <h2 class="heading">Prince Gurieli</h2>
            <h4 class="heading">Tea of May</h4>
        </div>


        <!-- product cards  -->
        <div class="card-container products">
            <div class="card" data-popup="popup1">
                <img src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup2">
                <img src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup3">
                <img src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup4">
                <img src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
        </div>


        <div class="product-content-txt">
                <p class="txt">
                    Prince Gurieli is our exclusive product, released in 2014. it is made from the highest quality, ecologically
                    pure tea leaves grown in the high mountain plantations of Caucasus, and handpicked in May when the
                    tea sprouts are newly flourished. Carefully processed, these are later transformed into what can be
                    regarded as the “Everest” of Georgian tea. <br> <br>
                    Premium quality Prince Gurieli tea is ecologically pure, fresh tea with rich fragrance and subtle taste.
                    Made from the first flush of gentle tea sprouts gathered by hand, in the morning hours, from the plantations
                    grown at the height of 400 meters above sea level, when the technological and biochemical potential of the
                    leaves reaches its maximum and its humidity is more than 76%.
                    The harvested tea leaves for Prince Gurieli are processed according to the classic method and go through all
                    the stages of withering, torsion, fermentation, drying up and sorting in the environment where all processes
                    as well as air temperature and relative humidity parameters and regulations are specially derived by our company specialists.
                </p>
        </div>

        <!-- traditional tea cards  -->
        <div class="card-container products mb-60">
            <div class="card" data-popup="popup5">
            <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup6">
            <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup7">
            <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
            <div class="card" data-popup="popup8">
            <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <h3 class="heading product-title">TRADITIONAL BLACK</h3>
                <p class="txt">Loose leaf tea, vol. 100 gr.</p>
            </div>
        </div>



        <!-- Popups -->
        <div id="popup1" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">This is a rich and flavorful loose leaf tea with a strong aroma, sourced from the finest tea gardens. The tea has a bold taste that complements both milk and lemon perfectly. Ideal for a refreshing morning brew.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup2" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">A delicate loose leaf tea with floral undertones and a light, refreshing flavor. It’s perfect for a calm afternoon tea session. Sourced from high-altitude plantations, this tea offers a unique balance of taste and fragrance.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup3" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">This bold and malty loose leaf tea is perfect for those who prefer a strong cup. With hints of caramel and honey, it’s a great choice for breakfast or an energizing tea break. The tea is known for its rich flavor and deep color.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup4" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/black-tea.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>






        <!-- traditional tea popups  -->
        <div id="popup5" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">This is a rich and flavorful loose leaf tea with a strong aroma, sourced from the finest tea gardens. The tea has a bold taste that complements both milk and lemon perfectly. Ideal for a refreshing morning brew.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup6" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">A delicate loose leaf tea with floral undertones and a light, refreshing flavor. It’s perfect for a calm afternoon tea session. Sourced from high-altitude plantations, this tea offers a unique balance of taste and fragrance.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup7" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">This bold and malty loose leaf tea is perfect for those who prefer a strong cup. With hints of caramel and honey, it’s a great choice for breakfast or an energizing tea break. The tea is known for its rich flavor and deep color.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>

        <div id="popup8" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>
    </section>    

    <script src="<?php echo $root;?>assets/scripts/products.js"></script>

    <?php
        $root = dirname(__DIR__) . '/'; 
        include $root . 'includes/footer.php';
    ?>
</body>
   