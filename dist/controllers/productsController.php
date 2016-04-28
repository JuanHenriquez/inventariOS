<?php

    require('../conection.php');
    require('../models/producto.php');
    require('../models/precio.php');

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $idPrecio = precio::exisPrecio($precio);

    if($idPrecio == 0){

        producto::creProduct($nombre, $idPrecio);

    }else {

        $last = precio::lastItem();
        producto::creProduct($nombre, $last);

    }



?>
