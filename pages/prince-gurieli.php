<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'HISTORY OF GURIELI'; 
    include $root . 'includes/inside-header.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
</head>

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

        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/products-imgs/product-bg.png)">
           
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
    <!-- end slider section  -->


    <?php
$products = [
    ['title' => 'Product 1', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 1'],
    ['title' => 'Product 2', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 2'],
    ['title' => 'Product 3', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 3'],
    ['title' => 'Product 4', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 4'],
    ['title' => 'Product 5', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 5'],
    ['title' => 'Product 6', 'image' => 'assets/imgs/icons/facebook.png', 'description' => 'Description for product 6'],
];
?>




<div class="card-container">
    <?php foreach ($products as $product): ?>
        <div class="card" 
            data-title="<?php echo htmlspecialchars($product['title']); ?>"
            data-image="<?php echo htmlspecialchars($product['image']); ?>"
            data-description="<?php echo htmlspecialchars($product['description']); ?>">
            <div class="card-image">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
            </div>
            <div class="title"><?php echo htmlspecialchars($product['title']); ?></div>
        </div>
    <?php endforeach; ?>
</div>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span id="modal-close" class="modal-close">&times;</span>
            <h2 id="modal-title"></h2>
            <img id="modal-image" src="" alt="">
            <p id="modal-description"></p>
        </div>
    </div>


    <script src="<?php echo $root;?>assets/scripts/products.js"></script>