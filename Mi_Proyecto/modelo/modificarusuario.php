<?php

include "Database.php";

/**
 * Modifica una usuario concreto segun el id a partir de un arrray en forma
 * array=[campo que deseas modificar=> valor que le quieras dar]
 * @param array $datos
 * @param string $idusuario
 */
function modificarUsuario($datos, $idusuario) {
    $a = "";
    foreach ($datos as $clave => $valor) {
        $a .= ", " . $clave . "= '" . $valor . "'";
    }

    $a = substr($a, 2);

    $sql = "UPDATE tbl_usuarios SET $a WHERE id_usuario=$idusuario";


    Database::getInstance()->db->query($sql);
}

/**
 * Devuelve un usuario segun el id
 * @param string $idusuario
 * @return array
 */
function getUsuario($idusuario) {

    $sql = "select * from tbl_usuarios where id_usuario=?";

    // Aquí incluimos la el resultado de ejecutar la sentencia
    $result = Database::getInstance()->db->prepare($sql);
    $result->bindParam(1, $idusuario);
    $result->execute();
    $datos = $result->fetch(PDO::FETCH_ASSOC);


    return $datos;
}
