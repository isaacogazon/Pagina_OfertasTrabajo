<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-7">
            <h3>SEGURO QUE QUIERES BORRAR</h3>
        </div>
        <div class="col-2 col-md-2 font-weight-bold h1 bg-success btn" style="border: 3px solid white;">
            <a href=<?php echo "borrarusuario.php?borrar=true&id=$id" ?>><h1 class="text-dark">SI</h1></a>
        </div>
        <div class="col-2 col-md-2 h1 bg-danger font-weight-bold btn offset-1" style="border: 3px solid white;">
            <a href=<?php echo "listarusuario.php" ?>><h1 class="text-dark">NO</h1></a>
        </div>
    </div>
</div>
<?php
include(TEMPLATE_PATH . 'pie.php');
