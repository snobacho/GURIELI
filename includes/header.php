<?php
    $root = '/Gurieli/'; 
    $current_page = basename($_SERVER['PHP_SELF']);
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?= $root ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= $root ?>assets/styles/global.css">
</head>
<body>
<header class="navbar">
    <div class="logo"><a href="<?= $root ?>"><img src="<?= $root ?>assets/imgs/logo-light-gurieli.png" alt=""></a></div>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?= $root ?>" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">HOME</a>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">OUR HISTORY</a>
            </li>
            <li class="nav-item">
                <a href="#" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">PRODUCTS</a>
                <ul class="dropdown">
                    <li class="dropdown-item">
                        <a href="#">Hot Brew Tea</a>
                        <ul class="child-list">
                            <li><a href="<?= $root ?>pages/products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Gurieli Classic</a></li>
                            <li><a href="<?= $root ?>pages/prince-gurieli.php" class="<?= $current_page == 'prince-gurieli.php' ? 'active' : '' ?>">Premium: Prince Gurieli</a></li>
                            <li><a href="#" class="<?= $current_page == 'special-editions.php' ? 'active' : '' ?>">Special Editions</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-item">
                        <a href="#" class="<?= $current_page == 'green-tea.php' ? 'active' : '' ?>">Green Tea</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/export.php" class="<?= $current_page == 'export.php' ? 'active' : '' ?>">EXPORT</a>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">CONTACT</a>
            </li>
        </ul>
    </nav>
</header>

<script src="<?= $root ?>/assets/scripts/header.js"> </script>

    
</body>
</html>
