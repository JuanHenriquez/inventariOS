$(document).ready(function(){

     // Boton tabla productos
    $('.btn-delete-product').click(function( e ){
        e.preventDefault();

        var btn = $(this),
            rowId = btn.parent().siblings('.id-table-product').text();

        var confirmar = confirm("¿Seguro desea elminar el producto?");
        console.log(rowId);

        if( confirmar ){

            $.ajax({
                'type': 'POST',
                'url': './controllers/productsDeleteController.php',
                'data': { id: rowId },
                'success': function(){
                    console.log("Pa fuera");
                    var row = btn.parents('.item-row');
                    row.remove();
                }
            });

        }
    });

     // Boton tabla almacen
    $('.btn-delete-warehouse').click(function( e ){
        e.preventDefault();

        var btn = $(this),
            rowId = btn.parent().siblings('.id-table-warehouse').text();

        var confirmar = confirm("¿Seguro desea elminar el producto?");
        console.log(rowId);

        if( confirmar ){

            $.ajax({
                'type': 'POST',
                'url': './controllers/almacenDeleteController.php',
                'data': { id: rowId },
                'success': function(){
                    var row = btn.parents('.item-row');
                    row.remove();
                    console.log("Pa fuera");
                }
            });

        }
    });

});
