<?php

include "constantes.php";

include (MODEL_PATH . "modificarusuario.php");
include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

$error = false;

$usuario = getUsuario($_GET['id']);
if ($_POST) {

    if (comprueba('nombre_usuario') == '') {
        echo "error introduce nombre de usuario </br>";
        $error = true;
    }

    if (comprueba('clave_usuario') == '') {
        echo "error introduce clave </br>";
        $error = true;
    }
    if (comprueba('tipo') == '' && esAdmin()) {
        echo "error elige tipo </br>";
        $error = true;
    }
}

if (!$_POST || $error == true) {

    include VIEW_PATH . "modificarusuario.php";
} else {
    $datos = [
        "nombre_usuario" => $_POST['nombre_usuario'],
        "clave_usuario" => $_POST['clave_usuario'],
        "tipo" => $_POST['tipo']
    ];
    modificarUsuario($datos, $_GET['id']);
    if (esAdmin())
        header("Location: listarusuario.php?");

    header("Location: listarusuario.php?");
}