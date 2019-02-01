<?php

include "Database.php";

/**
 * devuelve el numero de usuarios totales
 * @return string
 */
function getUsuariosTotales() {
    $sql = "select count(*) as total from tbl_usuarios";
    $result = Database::getInstance()->db->query($sql);
    $datos = $result->fetch();

    return $datos['total'];
}

/**
 *  Coge de la base de datos usuarios
 * @return array
 */
function getUsuarios() {
    $sql = "select * from tbl_usuarios";

    // Aquí incluimos la el resultado de ejecutar la sentencia
    $result = Database::getInstance()->db->query($sql);
    $datos = $result->fetchAll();

    return $datos;
}
