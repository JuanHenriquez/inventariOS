<table class="highlight responsive-table">
    <thead>
        <tr>
            <th data-field="name">Name</th>
            <th data-field="warehouse">Warehouse</th>
            <th data-field="quanty">Quanty</th>
        </tr>
    </thead>

    <tbody id="table-inventario">
        <?php

            $v = array();
            $v = inventario::readInventario();

            foreach( $v as $item ){

        ?>
        <tr class="item-row">
            <td class="id-nombre"><?php echo $item->producto ;?></td>
            <td class="id-almacen"><?php echo $item->almacen;?></td>
            <td class="id-cantidad"><?php echo $item->cantidad;?></td>
            <td><a href="a#" class="btn waves-effect btn-update-inventario">Update</a></td>
            <td><a href="#" class="btn waves-effect btn-delete-inventario">Delete</a></td>
        </tr>
        <?php  } ?>
    </tbody>
</table>
