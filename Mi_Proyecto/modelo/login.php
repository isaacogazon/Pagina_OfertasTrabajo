<?php

include_once "Database.php";

session_start();
$hora = hora();

function hora() {
    return date('H:i:s');
}

/**
 * Comprueba si el login es correcto
 * @param string $nombre
 * @param string $clave
 * @return boolean
 */
function loginOk($nombre, $clave) {

    if (existeUsuario($nombre, $clave)) {
        $_SESSION['dentro'] = TRUE;
        $_SESSION['logueado'] = $nombre;
        $_SESSION['usuario'] = $nombre;
        $_SESSION['id'] = getId($nombre);
        $_SESSION['tipo'] = getTipo($nombre);
        $_SESSION['hora'] = hora();

        // mostramos a la página de inicio de nuestro sitio
        return true;
    } else {
        return false;
    }
}

/**
 * Devuelve el tipo de un usuario segun el nombre
 * @param string $nombre
 * @return string
 */
function getTipo($nombre) {
    $sql = "select tipo  from tbl_usuarios where nombre_usuario=?";
    $result = Database::getInstance()->db->prepare($sql);
    $result->bindParam(1, $nombre);
    $result->execute();
    $datos = $result->fetch();

    return $datos['tipo'];
}

/**
 * Devuelve el id de un usuario segun el nombre
 * @param string $nombre
 * @return string
 */
function getId($nombre) {
    $sql = "select id_usuario  from tbl_usuarios where nombre_usuario=?";
    $result = Database::getInstance()->db->prepare($sql);
    $result->bindParam(1, $nombre);
    $result->execute();
    $datos = $result->fetch();

    return $datos['id_usuario'];
}

/**
 * comprueba si existe un usuario en tbl_usuarios seguen el nombre y la clave
 * @param string $nombre_usuario
 * @param string $clave
 * @return boolean
 */
function existeUsuario($nombre_usuario, $clave) {
    $sql = "select * from tbl_usuarios where nombre_usuario=? and clave_usuario=?";
    $result = Database::getInstance()->db->prepare($sql);
    $result->bindParam(1, $nombre_usuario);
    $result->bindParam(2, $clave);
    $result->execute();

    if ($result->rowCount() == 0) {
        return false;
    }
    return true;
}

/**
 * Compruba si la variable de session dentro es true o false
 */
function estaDentro() {

    if (!isset($_SESSION['dentro']) || !$_SESSION['dentro']) {  // Si no existe la sesión…
        return false;
    }
    return true;
}

/**
 * Comprueba si es admin
 * @return boolean
 */
function esAdmin() {
    if ($_SESSION['tipo'] == "admin")
        return true;
    return false;
}

/**
 * comprueba si es psicologo
 * @return boolean
 */
function esPsicologo() {
    if ($_SESSION['tipo'] == "psicologo")
        return true;
    return false;
}
