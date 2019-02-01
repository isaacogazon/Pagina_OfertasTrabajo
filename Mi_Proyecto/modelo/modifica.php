<?php

include(MODEL_PATH . 'Database.php');

function getOferta($id) {
    $query = "select * from tbl_oferta where id = $id";
    $result = Database::getInstance()->db->query($query);
    $datos = $result->fetch();
    return $datos;
}

function modOFerta($datos, $id) {
    $a = "";
    foreach ($datos as $key => $value) {
        $a .= ', ' . $key . '= "' . $value . '"';
    }
    $a = substr($a, 2);
    $query = "update tbl_oferta set $a where id = $id";
    $result = Database::getInstance()->db->query($query);
}
