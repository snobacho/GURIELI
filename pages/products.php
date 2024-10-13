<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'SPECIAL EDITIONS'; 
    include $root . 'includes/inside-header.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/global.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
</head>

<div class="card-container">
    <div class="card" data-popup="popup1">
        <img src="tea1.jpg" alt="Loose Leaf Tea">
        <h3>Product Titwdfawfle 1</h3>
        <p>Loose leaf tea, vol. 100 gr.</p>
    </div>
    <div class="card" data-popup="popup2">
        <img src="tea2.jpg" alt="Loose Leaf Tea">
        <h3>Product Title 2</h3>
        <p>Loose leaf tea, vol. 100 gr.</p>
    </div>
    <div class="card" data-popup="popup3">
        <img src="tea3.jpg" alt="Loose Leaf Tea">
        <h3>Product Title 3</h3>
        <p>Loose leaf tea, vol. 100 gr.</p>
    </div>
    <div class="card" data-popup="popup4">
        <img src="tea4.jpg" alt="Loose Leaf Tea">
        <h3>Product Title 4</h3>
        <p>Loose leaf tea, vol. 100 gr.</p>
    </div>
</div>

<!-- Popups -->
<div id="popup1" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <img src="tea1.jpg" alt="Product Image">
        <div class="popup-text">
            <h3>Product Title 1</h3>
            <h4>Prince Gurieli</h4>
            <p>This is a rich and flavorful loose leaf tea with a strong aroma, sourced from the finest tea gardens. The tea has a bold taste that complements both milk and lemon perfectly. Ideal for a refreshing morning brew.</p>
            <p>Loose leaf tea, vol. 100 gr.</p>
        </div>
    </div>
</div>

<div id="popup2" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <img src="tea2.jpg" alt="Product Image">
        <div class="popup-text">
            <h3>Product Title 2</h3>
            <h4>Prince Gurieli</h4>
            <p>A delicate loose leaf tea with floral undertones and a light, refreshing flavor. It’s perfect for a calm afternoon tea session. Sourced from high-altitude plantations, this tea offers a unique balance of taste and fragrance.</p>
            <p>Loose leaf tea, vol. 100 gr.</p>
        </div>
    </div>
</div>

<div id="popup3" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <img src="tea3.jpg" alt="Product Image">
        <div class="popup-text">
            <h3>Product Title 3</h3>
            <h4>Prince Gurieli</h4>
            <p>This bold and malty loose leaf tea is perfect for those who prefer a strong cup. With hints of caramel and honey, it’s a great choice for breakfast or an energizing tea break. The tea is known for its rich flavor and deep color.</p>
            <p>Loose leaf tea, vol. 100 gr.</p>
        </div>
    </div>
</div>

<div id="popup4" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <img src="tea4.jpg" alt="Product Image">
        <div class="popup-text">
            <h3>Product Title 4</h3>
            <h4>Prince Gurieli</h4>
            <p>An exotic blend of loose leaf tea with hints of spices and fruits. This tea offers a complex taste profile, making it perfect for tea enthusiasts looking for something new and exciting. Each sip reveals new layers of flavor.</p>
            <p>Loose leaf tea, vol. 100 gr.</p>
        </div>
    </div>
</div>


<script src="<?php echo $root;?>assets/scripts/products.js"></script>