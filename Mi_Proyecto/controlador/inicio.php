<?php

include('constantes.php');
include(MODEL_PATH . 'login.php');

if (!estaDentro())
    header("Location: login.php");

include(VIEW_PATH . 'inicio.php');

