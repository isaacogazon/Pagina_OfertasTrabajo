<?php

include "constantes.php";

include (MODEL_PATH . "listarusuario.php");
include (HELPERS_PATH . "helpers.php");

include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");

$ofertas = getUsuarios();
if (esPsicologo())
    header("Location: inicio.php");
include (VIEW_PATH . "listarusuario.php");
