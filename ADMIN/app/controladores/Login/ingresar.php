<?php
include('../../../config/conex.php');

$usuario = $_POST['Correo_Empleado'];
$contrasena = $_POST['Contrasena_Empleado'];

// Consulta para obtener al empleado por su correo
$SQL_LOGIN = "SELECT * FROM empleados WHERE Correo_Empleado = '$usuario'";
$Respuesta = $conexion->query($SQL_LOGIN);

// Verificar si el usuario existe
if ($Respuesta->num_rows > 0) {
    $Empleados = $Respuesta->fetch_assoc();
    $Auxiliar = $Empleados['Contrasena_Empleado'];
    $Nombre_Empleado = $Empleados['Nombre_Empleado'];
    $PK_Empleado = $Empleados['PK_Empleado'];
    $Correo_Empleado = $Empleados['Correo_Empleado'];

    // Comprobar si la contraseña coincide
    if ($Auxiliar == $contrasena) {
        session_start();
        $_SESSION['sesion_email'] = $Correo_Empleado;
        header('Location: '.$URL.'src/Dasboar/index.php'); // Página de redirección tras éxito
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: contraseña incorrecta";
        header('Location: '.$URL.'src/Login/index.php');
    }
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: usuario no encontrado";
    header('Location: '.$URL.'src/Login/index.php');
}
?>
