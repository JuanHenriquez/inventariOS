$(document).ready(function(){

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
                nombreInput.val("");
                precioInput.val(0);
            }
        });


    });

});
