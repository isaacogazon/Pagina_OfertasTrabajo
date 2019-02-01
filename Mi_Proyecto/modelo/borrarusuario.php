<?php

include "Database.php";

/**
 * borrar un usuario segun el id
 * @param int $idusuario
 */
function borrarUsuario($idusuario) {
    $sql = "delete from tbl_usuarios where id_usuario=$idusuario";
    Database::getInstance()->db->query($sql);
}
