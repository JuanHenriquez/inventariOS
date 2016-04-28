<?php

    require('../conection.php');
    require('../models/producto.php');

    $id = $_POST['id'];
    $precio = $_POST['precio'];

    producto::delProduct($id);


?>
