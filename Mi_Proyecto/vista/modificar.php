<?php include(TEMPLATE_PATH.'encabezado.php');?>
<div class="row">
    <div class="col-5 offset-3">
        <h1>Datos oferta trabajo:</h1>
    </div>
</div>
<div class="row">
    <div class="col-6 offset-3">
        <form method="post">
            <table id="tabla" class="table table-striped">
                <tbody>
                    <tr>
                        <td>Descripción</td>
                        <td><input type="text" name="descripcion" value="<?= $oferta['descripcion'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Persona de contacto</td>
                        <td><input type="text" name="contacto" value="<?= $oferta['contacto'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="telefono" value="<?= $oferta['telefono'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Correo electronico</td>
                        <td><input type="text" name="correo" value="<?= $oferta['correo'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><input type="text" name="direccion" value="<?= $oferta['direccion'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Población</td>
                        <td><input type="text" name="poblacion" value="<?= $oferta['poblacion'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Codigo postal</td>
                        <td><input type="text" name="cp" value="<?= $oferta['cp'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Provincia</td>
                        <td><?php echo CreaSelect('provincias', getProvincias(), $oferta['provincia']); ?></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td style="text-align: left;"><input type="radio" name="estado" value="pendiente" <?= $oferta['estado'] == "pendiente" ? " checked = 'true' " : '' ?> required/>Pendiente de iniciar selección<br>
                        <input type="radio" name="estado" value="realizando" <?= $oferta['estado'] == "realizando" ? " checked = 'true' " : '' ?>/>Realizando selección<br>
                        <input type="radio" name="estado" value="seleccionado" <?= $oferta['estado'] == "seleccionado" ? " checked = 'true' " : '' ?>/>Seleccionado candidato<br>
                        <input type="radio" name="estado" value="cancelada" <?= $oferta['estado'] == "cancelada" ? " checked = 'true' " : '' ?>/>Cancelada</td>
                    </tr>
                    <tr>
                        <td>Fecha comunicación (dd/mm/aaaa)</td>
                        <td><input type="text" name="fechacom" value="<?= SQLToDate($oferta['fechacom'])?>"></td>
                    </tr>
                    <tr>
                        <td>Psicologo encargado</td>
                        <td><input type="text" name="psicologo" value="<?= $oferta['psicologo'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Candidato seleccionado</td>
                        <td><input type="text" name="candidato" value="<?= $oferta['candidato'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Otros datos candidato</td>
                        <td><input type="text" name="otros" value="<?= $oferta['otros'] ?>"></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-3 offset-3 ">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>
<?php
include(TEMPLATE_PATH . 'pie.php');
?>