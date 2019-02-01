<?php

// definimos constantes que facilitan el trabajo
// Evitamos que se repita declaración con if (! defined(....
if (!defined('CTRL_PATH')) {
    define('CTRL_PATH', __DIR__ . '/');
    define('MODEL_PATH', __DIR__ . '/../modelo/');
    define('VIEW_PATH', __DIR__ . '/../vista/');
    define('TEMPLATE_PATH', __DIR__ . '/../vista/plantilla/');
    define('LIB_PATH', __DIR__ . '/../lib/');
    define('HELPERS_PATH', __DIR__ . '/../helpers/');
}
?>