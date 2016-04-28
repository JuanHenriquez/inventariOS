<?php

    require('../conection.php');
    require('../models/producto.php');
    require('../models/precio.php');

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    producto::updProduct($nombre, $id);

?>
