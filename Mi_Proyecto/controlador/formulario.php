<?php

include('constantes.php');
include(HELPERS_PATH . 'helpers.php');

include (MODEL_PATH . "login.php");

if (!estaDentro())
    header("Location: login.php");
if (esPsicologo())
    header("Location: accesodenegado.php");

// En un controlador real esto haría más cosas


$hay_errores = false;
if ($_POST) {
    if (empty($_POST['descripcion'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce descipción.</p>';
    }
    if (empty($_POST['contacto'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce persona de contacto.</p>';
    }
    if (empty($_POST['telefono'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce número de telefono.</p>';
    } else if (!preg_match("/^[6|7|9][\s|\-|\.]?([0-9][\s|\-|\.]?){8}$/", $_POST['telefono'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce un número válido.</p>';
    }
    if (empty($_POST['correo'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce correo electrónico.</p>';
    } else if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $_POST['correo'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce un correo válido.</p>';
    }
    if (empty($_POST['direccion'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce dirección.</p>';
    }
    if (empty($_POST['poblacion'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce población.</p>';
    }
    if (empty($_POST['cp'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce un CP(Codigo postal).</p>';
    } else if (!preg_match("/^(?:0[1-9]|[1-4]\d|5[0-2])\d{3}$/", $_POST['cp'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce un código postal válido.</p>';
    }
    if (empty($_POST['fechacom'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce fecha de comunicación</p>';
    } else if (!checkdate(checkFecha()[1], checkFecha()[0], checkFecha()[2])) {
        $hay_errores = true;
        echo '<p id="error">La fecha de comunicación no es correcta.</p>';
    } else if (fechaYMD()[2] . fechaYMD()[1] . fechaYMD()[0] < date("Ymd")) {
        $hay_errores = true;
        echo '<p id="error">La fecha no puede ser anterior a la actual</p>';
    }
    if (empty($_POST['psicologo'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce psicologo.</p>';
    }
    if (empty($_POST['candidato'])) {
        $hay_errores = true;
        echo '<p id="error">Introduce candidato.</p>';
    }
}
if ($hay_errores || !$_POST) {
    include(VIEW_PATH . 'formulario.php');
} else {
    insertOferta();
    header('Location: inicio.php');
} 