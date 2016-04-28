<div class="container">
    <div class="row">
        <div class="col s12">
            <h1>Stock</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, ipsa!</p>
        </div>
        <div class="col s12">
            <?php

                if( isset($_GET['action']) && $_GET['action'] == "update"){
                    include('form_update.php');
                }else {
                    include('form_create.php');
                }

            ?>

        </div> <!-- /.col -->
        <div class="col s12">
            <?php include('table.php') ?>
        </div>
    </div> <!-- /.row -->
</div>
