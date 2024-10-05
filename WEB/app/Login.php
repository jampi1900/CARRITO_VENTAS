<?php
include('../../ADMIN/config/conex.php');
session_name('session_tienda');
$Correo_Cliente = $_POST['Correo_Cliente'];
$Contrasena_Cliente = $_POST['Contrasena_Cliente'];

// Obtener la existencia
$sql = "SELECT * FROM clientes WHERE Correo_Cliente = '$Correo_Cliente'";
$rest = $conexion->query($sql);

// Verificar si el usuario existe
if ($rest->num_rows > 0) {
    //obtener la contraseña
    $cliente = $rest->fetch_assoc();
    $Auxiliar = $cliente['Contrasena_Cliente'];

    // Comprobar si la contraseña coincide
    if ($Auxiliar == $Contrasena_Cliente) {
        session_start();
        $_SESSION['sesion_email'] = $Correo_Cliente;
        header('Location: '.$URL_.'src/index.php');// Página de redirección tras éxito
    } else {
        session_start();
        $_SESSION['mensaje'] = "Contraseña incorrecta";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL_.'src/Login.php');
    }

} else {
    session_start();
    $_SESSION['mensaje'] = "Error: El usuario no existe";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL_.'src/Login.php');
}
?>
