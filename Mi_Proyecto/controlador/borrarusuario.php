<?php

include "constantes.php";
include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "borrarusuario.php");
include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

$id = $_GET['id'];

if (isset($_GET['borrar'])) {
    borrarUsuario($id);
    header("Location: listarusuario.php");
}
else {
    include (VIEW_PATH . "borrarusuario.php");
}



