<?php
include(TEMPLATE_PATH . 'encabezado.php');
?>
<div class="row">
    <div class="offset-md-4"></div>
    <div class="col-md-4">
        <h1>CREAR USUARIO</h1>
        <table class="table table-striped">
            <form method="post" >
                <tr>
                    <td>Nombre usuario:</td>
                    <td><input type="text" name="nombre_usuario" value="<?php echo!empty($_POST['nombre_usuario']) ? $_POST['nombre_usuario'] : "" ?>"></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="text" name="clave" value="<?php echo!empty($_POST['clave']) ? $_POST['clave'] : "" ?>"></td>
                </tr>
                <tr>
                    <td>Tipo:</td>
                    <td><input type="radio" name="tipo" value="admin" >Administrador<br>
                        <input type="radio" name="tipo" value="psicologo" >Psicologo</td>

                </tr>
                <tr>
                    <td colspan="2"><div>
                            <input type="submit" value="Enviar">
                        </div></td>
                </tr>
            </form>
        </table>
    </div>
    <div class="offset-md-4"></div>
</div>
<?php include(TEMPLATE_PATH . 'pie.php'); ?>