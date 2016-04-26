<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>Stock</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ipsa!</p>
        </div>
        <div class="col s12">
            <form action="#" class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <select name="nombre_almacen">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Almacen</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <select name="nombre_producto">
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Producto</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input id="cantidad_producto" name="cantidad_producto" type="number" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                            <label for="cantidad_producto">Cantidad</label>
                        </div>
                        <div class="col s12 l6 input-field center-align">
                            <button class="waves-effect waves-light btn" name="btn_inventario">Guadar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- /.col -->
        <div class="col s12">
            <?php include('table.php') ?>
        </div>
    </div> <!-- /.row -->
</div>