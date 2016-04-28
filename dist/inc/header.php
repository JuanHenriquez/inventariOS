<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>InventariOS</title>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.min.css"/>
    
    <?php if(isset($pageTitle) && $pageTitle == "admin"): ?>
    <link rel="stylesheet" href="css/style-admin.min.css"/>
    <?php elseif(isset($pageTitle) && $pageTitle == "products"): ?>
    <link rel="stylesheet" href="css/style-products.min.css"/>
    <?php endif; ?>
    
    
</head>
<body>
    
    <section>
        
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper container">
                        <a href="index.php" class="brand-logo">InventariOS</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="products.php">Productos</a></li>
                            <li><a href="admin.php">Panel de Administración</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="products.php">Productos</a></li>
                            <li><a href="admin.php" data-activates="dropdown">Panel de Administración</a></li>
                            <?php if($pageTitle == "admin"): ?>
                                <li class="divider"></li>
                                <ul class='hide-on-large-only'>
                                    <li><a href="admin.php?panel=stock">Stock</a></li>
                                    <li><a href="admin.php?panel=add">Add</a></li>
                                    <li><a href="admin.php?panel=sales">Sales</a></li>
                                </ul>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
