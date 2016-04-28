<?php

    require('../conection.php');
    require('../models/almacen.php');

    $id = $_POST['id'];

    almacen::delAlmacen($id);


?>
