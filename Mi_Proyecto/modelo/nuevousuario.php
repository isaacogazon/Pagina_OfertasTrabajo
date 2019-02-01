<?php

include "Database.php";

/**
 * Añade un usuario a partir de un array
 * array=[campo donde deseas añadir => dato]
 * @param array $datos
 * @return 
 */
function añadirUsuario($datos) {

    return Database::getInstance()->insert('tbl_usuarios', $datos);
}

/**
 * Comprueba si el nombre esta en la base de datos
 * @param string $nombre_usuario
 * @return boolean
 */
function existeNombre($nombre_usuario) {
    $sql = "select * from tbl_usuarios where nombre_usuario=? ";
    $result = Database::getInstance()->db->prepare($sql);
    $result->bindParam(1, $nombre_usuario);

    $result->execute();

    if ($result->rowCount() == 0) {
        return false;
    }
    return true;
}
