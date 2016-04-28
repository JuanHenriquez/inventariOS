$(document).ready(function(){

    // Save Button for products.
    $('#form-inventario').submit(function(e){
        e.preventDefault();
        var form = $('#form-inventario'),
            nombreInput = $('#nombre-producto'),
            almacenInput = $('#nombre-almacen'),
            cantidadInput = $('#cantidad-producto');

        var data = {
            nombre: nombreInput.val(),
            almacen: almacenInput.val(),
            cantidad: cantidadInput.val();
        };


        $.ajax({
            type: 'POST',
            url: './controllers/inventarioController.php',
            data: data,
            success: function(){

                var table = $('#table-inventario'),
                    lastRow = table.children().last();

                var template  = '<tr class="item-row">';
                    template += '<td>' + nombreInput.val() + '</td>';
                    template += '<td>$' + almacenInput.val() + '</td>';
                    template += '<td>$' + cantidadInput.val() + '</td>';
                    template += '<td><a href="" class="btn waves-effect btn-update-inventario">Update</a></td>';
                    template += '<td><a href="" class="btn waves-effect btn-delete-inventario">Delete</a></td></tr>';

                if(lastRow.length == 0){
                    table.append(template);
                }else {
                    lastRow.after(template);

                }

                nombreInput.val("");
                almacenInput.val("");
                cantidadInput.Input.val(0);



            }
        });
    });

});
