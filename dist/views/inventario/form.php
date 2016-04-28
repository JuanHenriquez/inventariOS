<form action="#" class="card" id="form-inventario">
    <div class="card-content">
        <div class="row">
            <div class="input-field col s12 l6">
                <select name="nombre-almacen" id="nombre-almacen">
                    <option value="" disabled selected>Choose your option</option>
                    <?php

                        $v = array();
                        $v = almacen::readAlmacen();

                        foreach( $v as $item ){

                    ?>
                    <option value="<?php echo $item->id ?>"><?php echo $item->nombre ?></option>
                    <?php $cont++; } ?>
                </select>
                <label>Almacen</label>
            </div>
            <div class="input-field col s12 l6">
                <select name="nombre-producto" id="nombre-producto">
                    <option value="" disabled selected>Choose your option</option>
                    <?php

                        $v2 = array();
                        $v2 = producto::readProduct();

                        foreach( $v2 as $item ){

                    ?>
                    <option value="<?php echo $item->id ?>"><?php echo $item->nombre ?></option>
                    <?php $cont++; } ?>
                </select>
                <label>Producto</label>
            </div>
            <div class="col s12 l6 input-field">
                <input id="cantidad-producto" name="cantidad-producto" type="number" class="validate" required data-error="Coloque un nombre valido" pattern="[a-zA-Z\s]+">
                <label for="cantidad-producto">Cantidad</label>
            </div>
            <div class="col s12 l6 input-field center-align">
                <button type="submit" class="waves-effect waves-light btn" name="btn_inventario">Guadar</button>
            </div>
        </div>
    </div>
</form>
