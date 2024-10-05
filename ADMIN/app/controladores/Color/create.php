<?php
include('../../../config/conex.php');

session_name('session_admin'); // Necesario 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar entrada
    $NOMBRE_COLOR = trim(filter_input(INPUT_POST, 'NOMBRE_COLOR', FILTER_SANITIZE_STRING));

    // Validar que no esté vacío
    if (empty($NOMBRE_COLOR)) {
        session_start();
        $_SESSION['mensaje'] = "El campo de nombre color está vacío";  // Mensaje de error
        $_SESSION['icono'] = "error";  // Icono de error
        header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
        exit();
    }

    // Validar que solo contenga letras y espacios
    if (!preg_match("/^[a-zA-Z\s]+$/", $NOMBRE_COLOR)) {
        session_start();
        $_SESSION['mensaje'] = "El nombre del color solo debe contener letras";  // Mensaje de error
        $_SESSION['icono'] = "error";  // Icono de error
        header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
        exit();
    }

    

    // Verificar si el nombre de color ya existe
    $sql_check = "SELECT COUNT(*) FROM colores WHERE Nombre_Color = ?";
    if ($stmt_check = $conexion->prepare($sql_check)) {
        $stmt_check->bind_param("s", $NOMBRE_COLOR); // Vincular el parámetro
        $stmt_check->execute(); // Ejecutar la consulta
        $stmt_check->bind_result($count); // Obtener el resultado
        $stmt_check->fetch(); // Recuperar el valor

        if ($count > 0) {
            // Si el nombre ya existe
            session_start();
            $_SESSION['mensaje'] = "El nombre del color ya está registrado"; // Mensaje de error
            $_SESSION['icono'] = "error"; // Icono de error
            $stmt_check->close(); // Cerrar la declaración
            header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
            exit();
        }
        $stmt_check->close(); // Cerrar la declaración
    }







    // Inserción segura en la base de datos
    $sql = "INSERT INTO colores (Nombre_Color, FK_Estado, FyH) VALUES (?, ?, NOW())"; // Agregar FK_Estado y FyH
    $fk_estado = 1; // Asignar el valor por defecto para FK_Estado

    if ($stmt = $conexion->prepare($sql)) { // Preparar la consulta
        $stmt->bind_param("si", $NOMBRE_COLOR, $fk_estado); // Vincular los parámetros
        if ($stmt->execute()) { // Ejecutar la consulta
            session_start();
            $_SESSION['mensaje'] = "Color guardado correctamente"; // Mensaje de éxito
            $_SESSION['icono'] = "success"; // Icono de éxito
        } else {
            session_start();
            $_SESSION['mensaje'] = "Error al guardar el color"; // Mensaje de error
            $_SESSION['icono'] = "error"; // Icono de error
        }
        $stmt->close(); // Cerrar la declaración
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error en la preparación de la consulta"; // Mensaje de error
        $_SESSION['icono'] = "error"; // Icono de error
    }




    header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
    exit();
}
?>
