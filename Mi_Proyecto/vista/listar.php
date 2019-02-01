<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="row">
    <div class="col-4 offset-4">
        <h1>Listado de ofertas</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 font-weight-bold table-sm">
        <table style="font-size: 0.9em;" class="table table-striped">
            <thead>
            <th>ID</th><th>Descripcion</th><th>Contacto</th><th>Telefono</th><th>Email</th><th>Direccion</th><th>Poblacion</th><th>CP</th><th>Provincia</th><th>Estado</th><th>Fecha Cre</th><th>Fecha Com</th>
            <th>Psicologo</th><th>Candidato</th><th>Otros</th><th>Mod</th><?php if (esAdmin()) { ?><th>Bor</th><?php } ?>
            </thead>
            <tbody>
                <?php
                foreach ($ofertas as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['descripcion'] ?></td>
                        <td><?= $value['contacto'] ?></td>
                        <td><?= $value['telefono'] ?></td>
                        <td><?= $value['correo'] ?></td>
                        <td><?= $value['direccion'] ?></td>
                        <td><?= $value['poblacion'] ?></td>
                        <td><?= $value['cp'] ?></td>
                        <td><?= $value['provincia'] ?></td>
                        <td><?= $value['estado'] ?></td>
                        <td><?= fechaguay($value['fechacre']) ?></td>
                        <td><?= fechaguay($value['fechacom']) ?></td>
                        <td><?= $value['psicologo'] ?></td>
                        <td><?= $value['candidato'] ?></td>
                        <td><?= $value['otros'] ?></td>
                        <td><a href=modificar.php?id=<?= $value['id'] ?>>Modificar</a></td>
                        <?php if (esAdmin()) { ?>
                            <td><a href=<?php echo"borraroferta.php?id=" . $value['id'] . "&pagina=" . $pagina ?>>Borrar</a></td>
                        <?php } ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-4 offset-4 btn">
        <?php echo HTML_Paginador($pagina, $total_paginas); ?>
    </div>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>