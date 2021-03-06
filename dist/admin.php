<?php 
    require('conection.php');
    $pageTitle = "admin";

?>

<?php include('inc/header.php') ?>

<main>
    <div id="control-panel" class="hide-on-med-and-down">
        <ul id="menu-items">
            <li><a href="admin.php?panel=stock">Stock</a></li>
            <li><a href="admin.php?panel=add">Add</a></li>
            <li><a href="admin.php?panel=sales">Ventas</a></li>
        </ul>
    </div>
    <div id="control-view">
        <div class="row">
            <div class="col s12">
                <?php 
                    if(isset($_GET['panel']) && $_GET['panel'] == "add"){
                        include('views/agregar/index.php');
                    }else if(isset($_GET['panel']) && $_GET['panel'] == "stock") {
                        include('views/inventario/index.php');
                    }else if(isset($_GET['panel']) && $_GET['panel'] == "sales"){
                        include('views/ventas/index.php');
                    }else {
                        
                    
                ?>
                
                <h1>Welcome to the administration panel</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, repudiandae.</p>
                
                <?php } ?>
            </div>
        </div>

        <?php include('inc/footer.php') ?>
        <script src="./views/agregar/agregar.js"></script>
        <script src="views/agregar/actualizar.js"></script>
        <script src="views/agregar/eliminar.js"></script>
    </div>
</main>

