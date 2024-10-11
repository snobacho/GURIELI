<?php
    $root = '/Gurieli/'; 
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/footer.css">
</head>


<footer class="footer" style="background-image: url('<?php echo $root; ?>assets/imgs/footer-bg.png');">
    <p class="footer-descr">Gurieli exporting markets expands to the following countries: USA, Canada, Germany, France, Ukraine, Latvia, <br> Lithuania, Czech Republic, Estonia and Poland. </p>
    <button class="btn-light"><a href="<?php echo $root?>/pages/contact.php">CONTACT US</a></button>
    <div class="footer-statistics">
        <div class="statistic-wrap">
            <div class="statistic-item">
                <h4>2010</h4>
                <p>FOUNDED</p>
            </div>
            <div class="statistic-item">
                <h4>650, 000</h4>
                <p>KGs OF PRODUCED LEAVES</p>
            </div>  
        </div>
        <div class="statistic-wrap">
            <div class="statistic-item">
                <h4>150, 000</h4>
                <p>KGs OF PACKAGED TEA</p>
            </div>
            <div class="statistic-item">
                <h4>120, 000</h4>
                <p>SQ M PLANTATIONS</p>
            </div>
        </div>
    </div>
</footer>
