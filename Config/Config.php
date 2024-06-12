<?php
// Definir la función para obtener la URL base dinámica
function calculate_base_url() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    return $protocol . "://" . $host . $uri . "/";
}

// Definir una constante utilizando define
define('base_url', calculate_base_url());
const host = "localhost";
const user = "root";
const pass = "";
const db = "gymup";
const charset = "charset=utf8";

// Uso de la constante BASE_URL
echo BASE_URL;
?>
