$(document).ready(function(){

    // Save Button for products.
    $('#form_product').submit(function(e){
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
                    lastNumberId = (lastRow.find('.id-number').length) ? parseInt(lastRow.find('.id-number').last().html()) + 1 : lastNumberId = 1;

                var template  = '<tr class="item-row"><td class="id-number">' + lastNumberId + '</td>';
                    template += '<td>' + nombreInput.val() + '</td>';
                    template += '<td>$' + precioInput.val() + '</td>';
                    template += '<td><a href="" class="btn waves-effect btn-update-product">Update</a></td>';
                    template += '<td><a href="" class="btn waves-effect btn-delete-product">Delete</a></td></tr>';

                if(lastRow.length == 0){
                    table.append(template);
                }else {
                    lastRow.after(template);

                }

                nombreInput.val("");
                precioInput.val(0);



            }
        });
    });

    // Save Button for Warehouse.
    $('#form_warehouse').submit(function(e){
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
                    lastNumberId = (lastRow.find('.id-number').length) ? parseInt(lastRow.find('.id-number').last().html()) + 1 : lastNumberId = 1;

                var template  = '<tr class="item-row"><td class="id-number">' + lastNumberId + '</td>';
                    template += '<td>' + nombreInput.val() + '</td>';
                    template += '<td><a href="" class="btn waves-effect btn-update-warehouse">Update</a></td>';
                    template += '<td><a href="" class="btn waves-effect btn-delete-warehouse">Delete</a></td></tr>';

                if(lastRow.length == 0){
                    table.append(template);
                }else {
                    lastRow.after(template);

                }

                nombreInput.val("");
            }
        });
    });

});
