<?php
    require('models/producto.php');
    require('models/almacen.php');
?>
<div class="row">
    <div class="col s12 l6">
        <h2>Almacen</h2>
        <form action="#" class="card" id="form_warehouse">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 input-field">
                        <input  placeholder="" id="nombreA" name="nombreA" type="text" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z0-9\s]+">
                        <label for="nombreA">Nombre del Almacen</label>
                    </div>
                    <div class="col s12 input-field right-align">
                        <a class="waves-effect waves-light btn" id="btn_warehouse">Guardar</a>
                        <a class="waves-effect waves-light btn" id="btn_warehouse_update" data-id="#">Guardar Cambios</a>
                    </div>
                </div>
            </div>
        </form>
    </div><!-- /.col -->
    <div class="col s12 l6">
        <?php include('table_warehouse.php'); ?>
    </div>
</div>
<div class="row">
    <div class="col s12 l6">
        <h2>Productos</h2>
        <form action="#" class="card" id="form_product">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 input-field">
                        <input placeholder="" id="nombreP" name="nombreP" type="text" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z0-9\s]+">
                        <label for="last_name">Nombre del Producto</label>
                    </div>
                    <div class="col s12 input-field">
                        <input placeholder="" id="precioP" name="precioP" type="number" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                        <label for="last_name">Precio</label>
                    </div>
                    <div class="col s12 input-field right-align">
                        <a class="waves-effect waves-light btn" id="btn_product">Guardar</a>
                        <a class="waves-effect waves-light btn" id="btn_product_update" data-id="#">Guardar Cambios</a>
                    </div>
                </div>
            </div>
        </form>
    </div> <!-- /.col -->
    <div class="col s12 l6">
        <?php include('table_products.php'); ?>
    </div>
</div>
