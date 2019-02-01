<?php

include "Database.php";

/**
 * borrar una oferta segun el id
 * @param int $idoferta
 */
function borrarOferta($idoferta) {
    $sql = "delete from tbl_oferta where id=$idoferta";
    Database::getInstance()->db->query($sql);
}
