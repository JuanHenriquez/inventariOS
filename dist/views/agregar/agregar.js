$(document).ready(function(){

    // Save Button for products.
    $('#btn_product').click(function(e){
        e.preventDefault();

        var form = $('#form_product'),
            nombreInput = $('#nombreP'),
            precioInput = $('#precioP');

        var data = {
            nombre: nombreInput.val(),
            precio: precioInput.val()
        };


        $.ajax({
            type: 'POST',
            url: './controllers/productsController.php',
            data: data,
            success: function(){

                var table = $('#table-products'),
                    lastRow = table.children().last(),
                    lastNumberId = parseInt(lastRow.find('.id-number').last().html());

                var template  = '<td class="id-number">' + (lastNumberId + 1) + '</td>';
                    template += '<td>' + nombreInput.val() + '</td>';
                    template += '<td>$' + precioInput.val() + '</td>';
                    template += '<td><a href="" class="btn waves-effect btn-update-product">Update</a></td>';
                    template += '<td><a href="" class="btn waves-effect btn-delete-product">Delete</a></td>';

                lastRow.after(template);

                nombreInput.val("");
                precioInput.val(0);



            }
        });
    });

    // Save Button for Warehouse.
    $('#btn_warehouse').click(function(e){
        e.preventDefault();

        var form = $('#form_warehouse'),
            nombreInput = $('#nombreA');

        var data = {
            nombre: nombreInput.val(),
        };


        $.ajax({
            type: 'POST',
            url: './controllers/almacenController.php',
            data: data,
            success: function(){

                var table = $('#table-warehouse'),
                    lastRow = table.children().last(),
                    lastNumberId = parseInt(lastRow.find('.id-number').last().html());

                var template  = '<td class="id-number">' + (lastNumberId + 1) + '</td>';
                    template += '<td>' + nombreInput.val() + '</td>';
                    template += '<td><a href="" class="btn waves-effect btn-update-product">Update</a></td>';
                    template += '<td><a href="" class="btn waves-effect btn-delete-product">Delete</a></td>';

                lastRow.after(template);

                nombreInput.val("");
            }
        });
    });

});
