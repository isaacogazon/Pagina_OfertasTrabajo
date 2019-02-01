<?php

include "Database.php";

/**
 * devuelve el string de una query segun el array 
 * por parametro le pasaremos array[[nombre-campo,operacion,valor-campo]]
 * @param array $array
 * @return string
 */
function elegirQuery($array) {
    $numero_operaciones = count($array);

    switch ($numero_operaciones) {
        case 1:

            return "Select * from tbl_oferta where " . $array[0]['nombre_campo'] . " " . $array[0]['operacion'] . " '" . $array[0]['valor_campo'] . "'";
            break;

        case 2:
            $str = "Select * from tbl_oferta where ";
            foreach ($array as $key => $value) {
                $str .= $value['nombre_campo'] . " " . $value['operacion'];
                $str .= " '" . $value['valor_campo'] . "' AND ";
            }
            return substr($str, 0, -4);

            break;

        case 3:
            $str = "Select * from tbl_oferta where ";
            foreach ($array as $key => $value) {
                $str .= $value['nombre_campo'] . " " . $value['operacion'];

                $str .= " '" . $value['valor_campo'] . "' AND ";
            }
            return substr($str, 0, -4);
    }
}

/**
 * Devuelve un resultado segun un array
 * array[[nombre-campo,operacion,valor-campo]]
 * @param array $array
 * @return array
 */
function Buscar($array) {
    $sql = elegirQuery($array);

    $result = Database::getInstance()->db->query($sql)->fetchAll();
    return $result;
}
