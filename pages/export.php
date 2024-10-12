<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'CONTACT - GURIELI'; 
    include $root . 'includes/inside-header-green.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/contact.css">
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

        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/contact-bg.svg)">
            <div class="content contact">
                <h2 class="heading page-title">Contact</h2>
                <div class="gurieli-contacts">
                    <div class="contact-items">
                        <div class="icon-boxs">
                        <h3 class="heading">Gurieli HQ Office</h3>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/map.png" alt="Gurieli">
                                <a href="#" target="_blank" class="heading" class="heading">56 Giorgi Chkondideli st. 0180, Tbilisi, Georgia</a>
                            </div>
                            <div class="icon-box">  
                                <img src="<?php echo $root?>assets/imgs/icons/phone.png" alt="Phone">
                                <a href="#" target="_blank" class="heading">032 2 22 63 20</a>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/mail.png" alt="Mail">
                                <a href="#" target="_blank" class="heading" class="heading">feedback@gurieli.com.ge</a>
                            </div>
                            <h3 class="heading factory">Gurieli Factory</h3>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/map.png" alt="Gurieli">
                                <a href="#" target="_blank" class="heading">92 Kostava st. 3500 Ozurgeti, Georgia</a>
                            </div>    
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.423834640585!2d44.74201077586209!3d41.71137227545345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404473569f7e3663%3A0x8d73604b133b5aa1!2sGurieli!5e0!3m2!1ska!2sge!4v1728767924037!5m2!1ska!2sge" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
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

