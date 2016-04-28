<?php

    require('../conection.php');
    require('../models/producto.php');
    require('../models/precio.php');

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    $idPrecio = precio::exisPrecio($precio);
    producto::creProduct($nombre, $idPrecio);


?>
