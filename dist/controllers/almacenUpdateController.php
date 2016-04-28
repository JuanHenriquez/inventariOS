<?php

    require('../conection.php');
    require('../models/almacen.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    almacen::updAlmacen($nombre, $id);

?>
