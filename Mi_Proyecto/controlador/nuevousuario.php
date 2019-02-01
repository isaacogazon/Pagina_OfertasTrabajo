<?php

include "constantes.php";

include (MODEL_PATH . "nuevousuario.php");
include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "login.php");

$error = false;

if (!estaDentro())
    header("Location: login.php");

if ($_POST) {

    if (comprueba('nombre_usuario') == '') {
        echo "<p id='error'>Error intrdoce nombre de usuario</p></br>";
        $error = true;
    }

    if (existeNombre(comprueba('nombre_usuario'))) {
        echo "<p id='error'>Error nombre existente en nuestra base de datos</p> </br>";
        $error = true;
    }

    if (comprueba('clave') == '') {
        echo "<p id='error'>Error introduce clave para el usuario</p> </br>";
        $error = true;
    }
    if (comprueba('tipo') == '') {
        echo "<p id='error'>Error elige tipo de usuario, administrador o psicologo</p></br>";
        $error = true;
    }
}


if (!$_POST || $error == true) {

    include VIEW_PATH . "nuevousuario.php";
} else {

    $datos = [
        "nombre_usuario" => $_POST['nombre_usuario'],
        "clave_usuario" => $_POST['clave'],
        "tipo" => $_POST['tipo']
    ];

    añadirUsuario($datos);
    existeNombre(!$_POST['nombre_usuario']);
    header("Location: listarusuario.php");
}