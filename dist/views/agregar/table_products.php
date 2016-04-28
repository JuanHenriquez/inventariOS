<table class="highlight responsive-table table-margin">
    <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="name">Name</th>
            <th data-field="price">Price</th>
        </tr>
    </thead>

    <tbody id="table-products">
        <?php

            $v = array();
            $v = producto::readProduct();
            $cont = 1;

            foreach( $v as $item ){

        ?>
            <tr class="item-row">
                <td class="id-number"><?php echo $cont ?></td>
                <td class="id-nombre"><?php echo $item->nombre ?></td>
                <td class="id-precio">$<?php echo $item->precio ?></td>
                <td class="id-table-product"><?php echo $item->id ?></td>
                <td><a href="#" class="btn waves-effect btn-update-product">Update</a></td>
                <td><a href="#" class="btn waves-effect btn-delete-product">Delete</a></td>
            </tr>
        <?php $cont++; } ?>
    </tbody>
</table>
