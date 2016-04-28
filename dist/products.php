<?php
    $pageTitle = 'products';

    include('inc/header.php');
?>

<main>

    <div class="container">
        <div class="row no-margin">
            <?php include('views/products/warehouse.php') ?>
            <?php include('views/products/index.php'); ?>

        </div> <!-- /.row -->
    </div>

</main>


<?php

include('inc/footer.php');

?>
<script src="views/products/products.js"></script>
