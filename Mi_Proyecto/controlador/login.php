<?php

include "constantes.php";
include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "login.php");


if ($_POST) { // Comprobamos que recibimos los datos y que no están vacíos
    if (loginOk($_POST['nombre'], $_POST['clave'])) {
        header('Location: inicio.php');
    } else {
        echo "nombre o clave incorrecto";
        include (VIEW_PATH . "login.php");
    }
} else {
    include (VIEW_PATH . "login.php");
}
?>