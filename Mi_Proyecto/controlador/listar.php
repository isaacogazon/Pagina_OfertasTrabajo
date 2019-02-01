<?php

include 'constantes.php';
include(HELPERS_PATH . 'helpers.php');
include(MODEL_PATH . 'listar.php');
include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

$totalOfertas = contarOfertas();
$ofertas = getOfertas($pagina, 5);
$total_paginas = ceil($totalOfertas / 5);
include(VIEW_PATH . 'listar.php');
