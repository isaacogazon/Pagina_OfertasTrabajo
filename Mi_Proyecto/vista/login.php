<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="row">
    <div class="col-sm-4 offset-4" style="text-align: center;">
        <table class="table table-striped">
            <h1>Registrese como usuario:</h1>
            <form method="post">
                <tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre" value=<?= comprueba('nombre') ?>></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="clave" ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>
                            <input type="submit" value="Enviar">
                        </div>
                    </td>
                </tr>

            </form>
        </table>
    </div>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>