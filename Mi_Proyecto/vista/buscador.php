<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 offset-4">
            <h1>DATOS OFERTA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table table-striped">
                <form method="post">
                    <tr>
                        <td>Candidato Seleccionado:</td>
                        <td><?php echo CreaSelect("opciones_cand_seleccionado", $opciones) ?></td>
                        <td><input type="text" name="candidato"></td>
                    </tr>
                    <tr>
                        <td>Fecha Comunicacion:</td>
                        <td><?php echo CreaSelect("opciones_fecha_comunicacion", $opciones) ?></td>
                        <td><input type="text" name="fechacom"></td>
                    </tr>
                    <tr>
                        <td>Descripcion:</td>
                        <td><?php echo CreaSelect("opciones_descripcion", $opciones) ?></td>
                        <td><input type="text" name="descripcion" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Buscar"></td>
                        <td></td>
                    </tr>

                </form>
            </table>
        </div>
    </div>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>