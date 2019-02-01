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
                        <td><?php echo $oferta['descripcion'] ?></td>
                    </tr>
                    <tr>
                        <td>Persona de contacto</td>
                        <td><?php echo $oferta['contacto'] ?></td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td><?php echo $oferta['telefono'] ?></td>
                    </tr>
                    <tr>
                        <td>Correo electronico</td>
                        <td><?php echo $oferta['correo'] ?></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><?php echo $oferta['direccion'] ?></td>
                    </tr>
                    <tr>
                        <td>Población</td>
                        <td><?php echo $oferta['poblacion'] ?></td>
                    </tr>
                    <tr>
                        <td>Codigo postal</td>
                        <td><?php echo $oferta['cp'] ?></td>
                    </tr>
                    <tr>
                        <td>Provincia</td>
                        <td><?php echo $oferta['provincia'] ?></td>
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
                        <td><?php echo $oferta['fechacom'] ?></td>
                    </tr>
                    <tr>
                        <td>Psicologo encargado</td>
                        <td><?php echo $oferta['psicologo'] ?></td>
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