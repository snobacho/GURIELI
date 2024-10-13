<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'SPECIAL EDDITIONS'; 
    include $root . 'includes/inside-header.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
</head>

    <!-- start slider section  -->
    <div class="slider-container" id="slider3">
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

    <section class="product-page mb-60 main-products">
        <div class="product-page-heading">
            <h2 class="heading">Gurieli Products</h2>
        </div>


        <div class="product-content-txt">
            <p class="txt">
                New redesigned product was inspired by the 200 years’ of history of Georgian tea, unique tea-making culture and
                tradition that was born in Guria, western part of Georgia. Specific character 
                of the region inspired us to create new illustrated concepts, based on the visual stories from the archive of Guria. 
            </p>
        </div>

        <div class="product-page-heading subtitle">
            <h2 class="heading">LOOSE LEAF TEA, 80 GR.</h2>
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
            Grown in the ,mountains of Western Georgia in an ecologically pure environment,
            the tea leaves are carefully processed without any artificial additives or coloring.
            They are blended with excellent local tea in order to get the best tea with its special
            nutritional value and all the health benefits. The brand combines black
            tea, green tea, black with bergamot, green with jasmine, Georgian berry and Forest fruit. 
            </p>
        </div>
        <div class="product-page-heading subtitle">
            <h2 class="heading">BAGS WITHOUT FOIL SACHETS, 25 PCS / 50 GR</h2>
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
                <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>
        <div id="popup6" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>
        <div id="popup7" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
                <div class="popup-text">
                    <h3 class="heading product-popup-title">TRADITIONAL BLACK</h3>
                    <h4 class="heading popup-page-title">Prince Gurieli</h4>
                    <p class="txt">An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
                    <p class="heading popup-gr">Loose leaf tea, vol. 100 gr.</p>
                </div>
            </div>
        </div>
        <div id="popup8" class="popup">
            <div class="popup-content">
                <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                <img src="<?= $root ?>assets/imgs/products-imgs/traditional-black.png" alt="Gurieli tea">
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
