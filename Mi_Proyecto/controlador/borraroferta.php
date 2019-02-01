<?php

include "constantes.php";
//include (HELPERS_PATH . "helpers.php");
include (MODEL_PATH . "borraroferta.php");
include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

$id = $_GET['id'];

if (isset($_GET['borrar'])) {
    borrarOferta($id);
    header('Location: listar.php');
}
else{
    include (VIEW_PATH . "borrar.php");
}