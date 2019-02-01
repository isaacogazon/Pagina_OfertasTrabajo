<?php

session_start();
// Destruimos toda la información de la sesión
session_destroy();

header("Location: login.php");
