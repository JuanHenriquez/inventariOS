$(document).ready(function(){

     // Boton tabla
    $('.btn-delete-product').click(function( e ){
        e.preventDefault();

        var btn = $(this),
            rowId = btn.parent().siblings('.id-table-product').text();

        var form = $('#form_product'),
            btn_guardar_cambios = $('#btn_delete_product');

        btn_guardar_cambios.data("id", rowId);

        var confirmar = confirm("¿Seguro desea elminar el producto?");

    });

});
