<?php
    $root = '/Gurieli/'; 
    $current_page = basename($_SERVER['PHP_SELF']);
    $is_products_active = in_array($current_page, ['products.php', 'hot-brew-tea.php', 'prince-gurieli.php', 'special-editions.php']);
    $is_hot_brew_tea_active = in_array($current_page, ['hot-brew-tea.php', 'prince-gurieli.php', 'special-editions.php']);
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?= $root ?>/assets/styles/header.css">
    <link rel="stylesheet" href="<?= $root ?>/assets/styles/global.css">
</head>
<body>
<header class="navbar inside-nav green">
    <div class="logo"><a href="<?= $root ?>"><img src="<?= $root ?>assets/imgs/green-gurieli-logo.png" alt="Logo"></a></div>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item <?= $current_page == 'index.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>">HOME</a>
            </li>
            <li class="nav-item <?= $current_page == 'about.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/about.php">OUR HISTORY</a>
            </li>
            <li class="nav-item <?= $is_products_active ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/products.php">PRODUCTS</a>
                <ul class="dropdown">
                    <li class="dropdown-item <?= $is_hot_brew_tea_active ? 'active' : '' ?>">
                        <a href="<?= $root ?>pages/hot-brew-tea.php">Hot Brew Tea</a>
                        <ul class="child-list">
                            <li>
                                <a href="<?= $root ?>pages/products.php" class="<?= $current_page == 'products.php' ? 'active' : '' ?>">Gurieli Classic</a>
                            </li>
                            <li>
                                <a href="<?= $root ?>pages/prince-gurieli.php" class="<?= $current_page == 'prince-gurieli.php' ? 'active' : '' ?>">Premium: Prince Gurieli</a>
                            </li>
                            <li>
                                <a href="<?= $root ?>pages/special-editions.php" class="<?= $current_page == 'special-editions.php' ? 'active' : '' ?>">Special Editions</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-item <?= $current_page == 'green-tea.php' ? 'active' : '' ?>">
                        <a href="<?= $root ?>pages/green-tea.php">Green Tea</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= $current_page == 'export.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/export.php">EXPORT</a>
            </li>
            <li class="nav-item <?= $current_page == 'contact.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/contact.php">CONTACT</a>
            </li>
        </ul>
    </nav>
</header>
</body>
</html>
