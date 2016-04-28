<?php

    require('conection.php');
    print "Listoj";
    include('models/almacen.php');

    $loquetedelagana = array();

    almacen::updAlmacen($_POST['nombre'], 2);

?>
