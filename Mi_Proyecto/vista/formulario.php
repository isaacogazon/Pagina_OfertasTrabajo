<?php include(TEMPLATE_PATH . 'encabezado.php'); ?>
<div class="row">
    <div class="col-9 offset-3">
        <h1>Datos oferta trabajo:</h1>
    </div>
    <div class="col-6 offset-3">
        <form action="formulario.php" method="post">
            <table id="tabla" class="table table-striped">
                <tbody>
                    <tr>
                        <td>Descripción</td>
                        <td><input type="text" name="descripcion" value="<?php echo!empty($_POST['descripcion']) ? $_POST['descripcion'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Persona de contacto</td>
                        <td><input type="text" name="contacto" value="<?php echo!empty($_POST['contacto']) ? $_POST['contacto'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><input type="text" name="telefono" value="<?php echo!empty($_POST['telefono']) ? $_POST['telefono'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Correo electronico</td>
                        <td><input type="text" name="correo" value="<?php echo!empty($_POST['correo']) ? $_POST['correo'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><input type="text" name="direccion" value="<?php echo!empty($_POST['direccion']) ? $_POST['direccion'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Población</td>
                        <td><input type="text" name="poblacion" value="<?php echo!empty($_POST['poblacion']) ? $_POST['poblacion'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Codigo postal</td>
                        <td><input type="text" name="cp" value="<?php echo!empty($_POST['cp']) ? $_POST['cp'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Provincia</td>
                        <td><?php echo CreaSelect('provincias', getProvincias(), isset($_POST['provincias']) ? $_POST['provincias'] : ''); ?></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td style="text-align: left;"><input type="radio" name="estado" value="pendiente" <?php ValorPost('estado') == ("p") ? " selected = 'true' " : "" ?> />Pendiente de iniciar selección<br>
                            <input type="radio" name="estado" value="realizando" <?php ValorPost('estado') == ("r") ? " selected = 'true' " : "" ?>/>Realizando selección<br>
                            <input type="radio" name="estado" value="seleccionado" <?php ValorPost('estado') == ("s") ? " selected = 'true' " : "" ?>/>Seleccionado candidato<br>
                            <input type="radio" name="estado" value="cancelada" <?php ValorPost('estado') == ("c") ? " selected = 'true' " : "" ?>/>Cancelada</td>
                    </tr>
                    <tr>
                        <td>Fecha comunicación (dd/mm/aaaa)</td>
                        <td><input type="text" name="fechacom" value="<?php echo!empty($_POST['fechacom']) ? $_POST['fechacom'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Psicologo encargado</td>
                        <td><input type="text" name="psicologo" value="<?php echo!empty($_POST['psicologo']) ? $_POST['psicologo'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Candidato seleccionado</td>
                        <td><input type="text" name="candidato" value="<?php echo!empty($_POST['candidato']) ? $_POST['candidato'] : "" ?>"></td>
                    </tr>
                    <tr>
                        <td>Otros datos candidato</td>
                        <td><input type="text" name="otrosdatos" value="<?php echo!empty($_POST['otrosdatos']) ? $_POST['otrosdatos'] : "" ?>"></td>
                    </tr>
                </tbody>
            </table>
            <div class="col-2 offset-4 btn">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>