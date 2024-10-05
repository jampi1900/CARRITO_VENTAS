<?php
include('../../ADMIN/config/conex.php');
session_name('session_tienda');
$Correo_Registro = $_POST['Correo_Cliente'];
$Contrasena_Registro = $_POST['Contrasena_Cliente'];

// Consulta para ver si no se repite el correo
$sql = "SELECT * FROM clientes WHERE Correo_Cliente = '$Correo_Registro'";
$rest = $conexion->query($sql);

// consulto si existe un correo igual
if ($rest->num_rows > 0) {
    session_start();
    $_SESSION['mensaje'] = "El correo registrado ya existe";
    header('Location: '.$URL_.'src/Login.php');
} else {
    // hacer un insert para crear un usuario
    $sql = "INSERT INTO clientes (Correo_Cliente, Contrasena_Cliente) VALUES ('$Correo_Registro', '$Contrasena_Registro')";
    $rest = $conexion->query($sql);
    
    if ($rest === TRUE) {
        session_start();
        $_SESSION['sesion_email'] = $Correo_Registro;
        header('Location: '.$URL_.'src/index.php');

    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: no se pudo registrar";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL_.'src/Login.php');
    }
    
   
}
?>
