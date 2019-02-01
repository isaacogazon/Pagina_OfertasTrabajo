<?php
include(TEMPLATE_PATH . 'encabezado.php');
?>
<div class="col-6 offset-3">
    <h1>Lista usuarios</h1>
    <table class="table table-striped">
        <form method="post" >
            <tr>
                <th colspan="2"><div>DATOS USUARIO</div></th>
            </tr>
            <tr>
            <tr>
                <td>Nombre Usuario:</td>
                <td><input type="text" name="nombre_usuario" value="<?= $usuario['nombre_usuario'] ?>"></td>
            </tr>

            <tr>
                <td>Clave usuario:</td>
                <td><input type="text" name="clave_usuario" value="<?= $usuario['clave_usuario'] ?>"></td>
            </tr>

            <?php if (esAdmin()) { ?>
                <tr>
                    <td>Estado:</td>
                    <td style="text-align: left;"><input type="radio" name="tipo" value="admin" <?= $usuario['tipo'] == 'admin' ? "checked='true'" : '' ?>>Administrador<br>
                        <input type="radio" name="tipo" value="psicologo" <?= $usuario['tipo'] == 'psicologo' ? "checked='true'" : '' ?>>Psicologo</td>

                </tr>
            <?php } ?>


            <tr>
                <td colspan="2"><div>
                        <input type="submit" value="Enviar">
                    </div></td>
            </tr>
        </form>
    </table>
</div>
</div>
<?php include (TEMPLATE_PATH . 'pie.php'); ?>