<table class="highlight responsive-table table-margin">
    <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="name">Name</th>
        </tr>
    </thead>

    <tbody id="table-warehouse">
        <?php

            $v = array();
            $v = almacen::readAlmacen();
            $cont = 1;

            foreach( $v as $item ){

        ?>
            <tr class="item-row">
                <td class="id-number"><?php echo $cont ?></td>
                <td class="id-nombre"><?php echo $item->nombre ?></td>
                <td class="id-table-warehouse"><?php echo $item->id ?></td>
                <td><a href="#" class="btn waves-effect btn-update-warehouse">Update</a></td>
                <td><a href="#" class="btn waves-effect btn-delete-warehouse">Delete</a></td>
            </tr>
        <?php $cont++; } ?>
    </tbody>
</table>
