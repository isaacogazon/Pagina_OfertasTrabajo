<?php
include(TEMPLATE_PATH . 'encabezado.php');
?>
<div class="col-5 offset-4">
    <h1>Lista usuarios:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Clave</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <?php
        foreach ($ofertas as $valor):
            ?>
            <tr>
                <td></td>
                <td><?php echo $valor['nombre_usuario'] ?></td>
                <td><?php echo $valor['clave_usuario'] ?></td>
                <td><?php echo $valor['tipo'] ?></td>

                <td>
                    <a href=<?php echo "modificarusuario.php?id=" . $valor['id_usuario'] ?>>modificar</a>
                    <a href=<?php echo "borrarusuario.php?id=" . $valor['id_usuario'] ?>>borrar</a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>