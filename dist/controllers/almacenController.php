<?php

    require('../conection.php');
    require('../models/almacen.php');

    $nombre = $_POST['nombre'];

    almacen::creAlmacen($nombre);
?>
