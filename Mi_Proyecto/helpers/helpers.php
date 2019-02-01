<?php
error_reporting(0);

require_once (MODEL_PATH . 'conexion.php');

function ValorPost($nombreCampo, $valorPorDefecto = '') {
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
    else
        return $valorPorDefecto;
}

function checkFecha() {
    $fechacom = $_POST['fechacom'];
    $dividido = explode("/", $fechacom);
    return $dividido;
}

/**
 * Recoge fecha en formato SQL y la muestra en DD/MM/YYYY
 * @return type
 */
function fechaYMD() {
    $fecha = $_POST['fechacom'];
    $div = explode("/", $fecha);
    return $div;
}

/**
 * Convierte la fecha dada en un formato sql YYYY-MM-DD
 * @param string $fecha
 * @return string
 */
function dateToSQL($fecha) {
    $fechaarray = explode("/", $fecha);
    return str_pad($fechaarray[2], 4, "0", STR_PAD_LEFT) . "-" . str_pad($fechaarray[1], 2, "0", STR_PAD_LEFT) . "-" . str_pad($fechaarray[0], 2, "0", STR_PAD_LEFT);
}

/**
 * Devuelve la fecha en formato DD/MM/YYYY
 * @param string $fecha
 * @return string
 */
function SQLToDate($fecha) {
    $fechaarray = explode("-", $fecha);
    return str_pad($fechaarray[2], 2, "0", STR_PAD_LEFT) . "/" . str_pad($fechaarray[1], 2, "0", STR_PAD_LEFT) . "/" . str_pad($fechaarray[0], 4, "0", STR_PAD_LEFT);
}

/**
 * Recibe fecha en SQL y lo devuelve en formato DD/MM/YYYY
 * @param type $fecha
 * @return type
 */
function fechaguay($fecha) {
    $mifecha = explode("-", $fecha);
    // var_dump("$mifecha");
    return $mifecha[2] . '/' . $mifecha[1] . '/' . $mifecha[0];
}

/**
 * Crea el select con sus option
 * @param type $name
 * @param type $opciones
 * @param type $valorDefecto
 * @return string
 */
function CreaSelect($name, $opciones, $valorDefecto = '') {
    $html = "\n" . '<select name="' . $name . '">';
    foreach ($opciones as $value => $text) {
        if ($value == $valorDefecto)
            $select = 'selected="selected"';
        else
            $select = "";
        $html .= "\n\t<option value=\"$value\" $select>$text</option>";
    }
    $html .= "\n</select>";
    return $html;
}

/**
 * Coge las provincias de la base de datos
 * @return type
 */
function getProvincias() {

    $db = Conexion::getInstance();
    $mysqli = $db->getConnection();
    $mysqli->set_charset('utf8');
    $sql_query = 'SELECT cod, nombre FROM tbl_provincias';
    $result = $mysqli->query($sql_query);

    $provincia = [];
    while ($line = $result->fetch_assoc()) {
        $provincia[$line['cod']] = $line['nombre'];
    }
    return $provincia;
}

/**
 * Funcion que inserta oferta en sql con el filtrado de campos
 */
function insertOferta() {

    $db = Conexion::getInstance();
    $mysqli = $db->getConnection();
    $mysqli->set_charset('utf8');
    // Realizar una consulta MySQL
    $fechacom = fechaYMD()[2] . fechaYMD()[1] . fechaYMD()[0];
    //Preparo los datos para evitar consultas en los input
    $stmt = $mysqli->prepare("INSERT INTO tbl_oferta (descripcion, contacto, telefono, correo, direccion, poblacion, cp, provincia, estado, fechacom, psicologo, candidato, otros) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssssssdsss', $descripcion, $contacto, $telefono, $correo, $direccion, $poblacion, $cp, $provincia, $estado, $fechacom, $psicologo, $candidato, $otrosdatos);
    // Establecer parámetros y ejecutar
    $descripcion = $_POST['descripcion'];
    $contacto = $_POST['contacto'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $poblacion = $_POST['poblacion'];
    $cp = $_POST['cp'];
    $provincia = $_POST['provincias'];
    $estado = $_POST['estado'];
    $psicologo = $_POST['psicologo'];
    $candidato = $_POST['candidato'];
    $otrosdatos = $_POST['otrosdatos'];
    $stmt->execute();
}

/**
 * Funcion que crea el paginador en formato html
 * @param type $pagina
 * @param type $total_paginas
 * @return string
 */
function HTML_Paginador($pagina, $total_paginas) {
    $html = '';

    //link a primera pagina
    $html .= '<div class="row"><div id="paginador" class=" col-12 bg-dark" style="text-align:center" ><a href="listar.php?pagina=1">Primera </a>';

    for ($i = 1; $i <= $total_paginas; $i++) {

        $html .= ' <a href="listar.php?pagina=' . $i . '">' . $i . "</a>";
    }
    // link a la ultima pagina
    $html .= " <a href='listar.php?pagina=$total_paginas'>" . ' Ultima' . "</a></div></div>";
    return $html;
}

/**
 * comprueba y devuelve el valor del campo
 * @param string $nombreCampo
 * @param string $valorPorDefecto
 * @return string|string
 */
function comprueba($nombreCampo, $valorPorDefecto = '') {
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
    else
        return $valorPorDefecto;
}
