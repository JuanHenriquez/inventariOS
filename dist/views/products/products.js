$(document).ready(function(){

    $('.btn-buy').click(function(e){
        e.preventDefault();

        var btn = $(this),
            inputID = btn.next(),
            inputCantidad = btn.prev();

        var data = {
            id: inputID.val(),
            cantidad: inputCantidad.val()
        };

        $.ajax({
            type: 'POST',
            url: 'productsController.php',
            data: data,
            success: function(){

            }
        });
    });

});
