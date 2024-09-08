<?php
$host = "localhost";
$usuario = "root";
$contraseña = "1234";
$base_de_datos = "proyecto_personal";

// Crear la conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
date_default_timezone_set('America/Lima');
$URL = 'http://localhost:8080/PROYECTO_WEB/ADMIN/';
$URL_= 'http://localhost:8080/PROYECTO_WEB/WEB/';
$FECHA = date("Y-m-d H:i:s"); 

//echo "Conexión exitosa";
