<?php

    require('../conection.php');
    require('../models/producto.php');
    require('../models/precio.php');

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $idPrecio = precio::exisPrecio($precio);

    if($idPrecio == 0){
        $last = precio::lastItem();
        producto::creProduct($nombre, $last);

    }else {
        producto::creProduct($nombre, $idPrecio);
    }



?>
