<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'EXPORT - GURIELI'; 
    include $root . 'includes/inside-header-green.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/export.css">
</head>

<div class="slider-container" id="slider5">
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

        <div class="content-slider export" style="background-image: url(<?= $root ?>assets/imgs/contact-bg.svg)">
            <div class="content">
                <div>
                    <img src="<?= $root ?>assets/imgs/gurieli-continents.png" alt="export gurieli img">
                </div>
                <div class="country-chain mt-60 mb-60">
                    <div class="box">
                        <div class="circle circle-1"></div>
                        <h3>USA</h3>
                        <p class="txt">Importer: XXX LTD <br> Ssince 2019</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>CANADA</h3>
                        <p class="txt">Importer: YYY LTD <br> Ssince 2018</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>GERMANY</h3>
                        <p class="txt">Importer: AAA LTD <br> Ssince 2016</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>FRANCE</h3>
                        <p class="txt">Importer: BBB LTD <br> Ssince 2015</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>UKRAINE</h3>
                        <p class="txt">Importer: CCC LTD <br> Ssince 2014</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>LATHVIA</h3>
                        <p class="txt">Importer: CCC LTD <br> Ssince 2014</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>LITHUANIA</h3>
                        <p class="txt">Importer: CCC LTD <br> Ssince 2014</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>ESTONIA</h3>
                        <p class="txt">Importer: CCC LTD <br> Ssince 2014</p>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3>CZECH REP.</h3>
                        <p class="txt">Importer: CCC LTD <br> Ssince 2014</p>
                    </div>
                </div>

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
    

    <?php
        $root = dirname(__DIR__) . '/'; 
        include $root . 'includes/footer.php';
    ?>


