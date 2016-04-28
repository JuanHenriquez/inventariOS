<div class="row">
    <div class="col s12 l6">
        <h2>Almacen</h2>
        <form action="#" class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 input-field">
                        <input id="nombreA" name="nombreA" type="text" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                        <label for="nombreA">Nombre del Almacen</label>
                    </div>
                    <div class="col s12 input-field right-align">
                        <a class="waves-effect waves-light btn">Guardar</a>
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
                        <input id="nombreP" name="nombreP" type="text" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                        <label for="last_name">Nombre del Producto</label>
                    </div>
                    <div class="col s12 input-field">
                        <input id="precioP" name="precioP" type="number" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                        <label for="last_name">Precio</label>
                    </div>
                    <div class="col s12 input-field right-align">
                        <a class="waves-effect waves-light btn" id="btn_product">Guardar</a>
                    </div>
                </div>
            </div>
        </form>
    </div> <!-- /.col -->
    <div class="col s12 l6">
        <?php include('table_products.php'); ?>
    </div>
</div>
