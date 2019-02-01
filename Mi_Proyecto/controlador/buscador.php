<?php

include "constantes.php";
include (MODEL_PATH . "buscador.php");
include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

$opciones = ['=' => 'igual que', '<' => 'menor que', '>' => 'mayor que'];
if (!$_POST) {
    include VIEW_PATH . "buscador.php";
} else {
    $valores = [];


    if (comprueba("candidato") != "") {
        $array = [
            'nombre_campo' => "candidato",
            'valor_campo' => $_POST['candidato'],
            'operacion' => $_POST['opciones_cand_seleccionado']
        ];
        array_push($valores, $array);
    }
    if (comprueba("fechacom") != "") {
        $fecha = dateToSQL($_POST['fechacom']);
        $array = [
            'nombre_campo' => "fechacom",
            'valor_campo' => $fecha,
            'operacion' => $_POST['opciones_fecha_comunicacion']
        ];
        array_push($valores, $array);
    }
    if (comprueba("descripcion") != "") {
        $array = [
            'nombre_campo' => "descripcion",
            'valor_campo' => $_POST['descripcion'],
            'operacion' => $_POST['opciones_descripcion']
        ];
        array_push($valores, $array);
    }

    $ofertas = buscar($valores);
    include VIEW_PATH . "listarbusqueda.php";
}
