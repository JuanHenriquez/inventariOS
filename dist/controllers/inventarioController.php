<?php

    require('../conection.php');
    require('../models/inventario.php');

    $nombre = $_POST['nombre'];
    $almacen = $_POST['almcen'];
    $cantidad = $_POST['cantidad'];

    inventario::creInventario($nombre);
?>
