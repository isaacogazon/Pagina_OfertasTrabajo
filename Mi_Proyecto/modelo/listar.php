<?php

include(MODEL_PATH . 'Database.php');

/**
 * Cuenta todas las oferas
 * @return type array
 */
function contarOfertas() {
    $query = "select count(*) as total from tbl_oferta";
    $result = Database::getInstance()->db->query($query);

    $datos = $result->fetch();
    return $datos['total'];
}

/**
 * Devuelve todas las ofertas
 * @param type $pagina
 * @param type $por_pagina
 * @return type
 */
function getOfertas($pagina, $por_pagina) {
    $cantidad = ($pagina - 1) * $por_pagina;
    $query = "select * from tbl_oferta order by fechacre limit $cantidad,$por_pagina";
    $result = Database::getInstance()->db->query($query);

    $datos = $result->fetchAll();
    return $datos;
}
