<?php
    require('models/producto.php');
    require('models/almacen.php');
    require('models/inventario.php');
?>
<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>Stock</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ipsa!</p>
        </div>
        <div class="col s12">

            <?php include('form.php'); ?>

        </div> <!-- /.col -->
        <div class="col s12">
            <?php include('table.php') ?>
        </div>
    </div> <!-- /.row -->
</div>
