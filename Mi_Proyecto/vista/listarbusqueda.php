<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="row">
    <div class="col-12 offset-4">
        <h1>Lista ofertas</h1>
    </div>
</div>
<div class="col-8 offset-2">
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Email</th>
                <th>Contacto</th>
                <th>Psicologo</th>
                <th>Estado</th>
                <th>Mod</th>
                <?php if (esAdmin()) { ?>
                    <th>Bor</th>
                <?php } ?>
            </tr>
        </thead>

        <?php
        foreach ($ofertas as $valor):
            ?>
            <tr>
                <td><?php echo $valor['id'] ?></td>
                <td><?php echo $valor['correo'] ?></td>
                <td><?php echo $valor['contacto'] ?></td>
                <td><?php echo $valor['psicologo'] ?></td>
                <td><?php echo $valor['estado'] ?></td>
                <td><a href=<?php echo"modificar.php?id=" . $valor['id'] ?>>modificar</a></td>
                <?php if (esAdmin()) { ?>
                    <td><a href=<?php echo"borraroferta.php?id=" . $valor['id'] ?>>borrar</a></td>
                <?php } ?>
            </tr>

        <?php endforeach;
        ?>
    </table>
</div>
<div class="col-2 offset-4" style="border: 3px solid white;">
    <a href="buscador.php" class="text-dark font-weight-bold bg-success btn">Realizar otra busqueda.</a>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>