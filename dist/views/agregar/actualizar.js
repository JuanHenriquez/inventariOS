$(document).ready(function(){

    // Boton tabla
    $('.btn-update-product').click(function( e ){
        e.preventDefault();

        var btn = $(this),
            rowId = btn.parent().siblings('.id-table-product').text(),
            nombre = btn.parent().siblings('.id-nombre').text(),
            precio = btn.parent().siblings('.id-precio').text();

        var form = $('#form_product'),
            nombreInput = $('#nombreP'),
            precioInput = $('#precioP'),
            btn_guardar_cambios = $('#btn_product_update'),
            btn_guardar = $('#btn_product');

        nombreInput.val(nombre);
        precioInput.val(precio.slice(1));
        btn_guardar_cambios.data("id", rowId);
        btn_guardar_cambios.css('display', 'block');
        btn_guardar.css('display', 'none');
    });

    // Boton formulario
    $('#btn_product_update').click(function(e){
        e.preventDefault();

        var form = $('#form_product'),
            nombreInput = $('#nombreP'),
            precioInput = $('#precioP');

        var btn_guardar_cambios = $('#btn_product_update');

        var data = {
            id: btn_guardar_cambios.data('id'),
            nombre: nombreInput.val(),
            precio: precioInput.val()
        };

        $.ajax({
            type: 'POST',
            url: 'controllers/productsUpdateController.php',
            data: data,
            success: function(){
                console.log("Se actualizo bien");
            }
        });

    });

    // Boton tabla
    $('.btn-update-warehouse').click(function( e ){
        e.preventDefault();

        var btn = $(this),
            rowId = btn.parent().siblings('.id-table-warehouse').text(),
            nombre = btn.parent().siblings('.id-nombre').text();

        var form = $('#form_warehouse'),
            nombreInput = $('#nombreA'),
            btn_guardar_cambios = $('#btn_warehouse_update'),
            btn_guardar = $('#btn_warehouse');

        nombreInput.val(nombre);
        btn_guardar_cambios.data("id", rowId);
        btn_guardar_cambios.css('display', 'block');
        btn_guardar.css('display', 'none');
    });

    // Boton formulario
    $('#btn_warehouse_update').click(function(e){
        e.preventDefault();

        var form = $('#form_warehouse'),
            nombreInput = $('#nombreA');

        var btn_guardar_cambios = $('#btn_warehouse_update');

        var data = {
            id: btn_guardar_cambios.data('id'),
            nombre: nombreInput.val()
        };

        $.ajax({
            type: 'POST',
            url: 'controllers/almacenUpdateController.php',
            data: data,
            success: function () {
                console.log("Se actualizo bien");
            }
        });
    });

});
