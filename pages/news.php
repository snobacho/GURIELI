<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'NEWS - GURIELI'; 
    include $root . 'includes/inside-header.php';
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/news.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>

<section class="news-section"> 
    <h2 class="news">NEWS</h2>
    <div class="news-cards"></div>
</section>

<script src="<?php echo $root;?>assets/scripts/animate.js"></script>
<?php
    $root = dirname(__DIR__) . '/'; 
    include $root . 'includes/footer.php';
?>
