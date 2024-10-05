<?php
// Incluye tu conexión a la base de datos aquí
include('../../../config/conex.php');
session_name('session_admin'); // Necesario 

if (isset($_GET['id'])) {
    $PK_Color = intval($_GET['id']); // Asegúrate de convertir a entero

    try {
        // Preparar la consulta de eliminación
        $sql = "DELETE FROM colores WHERE PK_Color = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('i', $PK_Color);

        // Intentar ejecutar la consulta
        if ($stmt->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Color eliminado correctamente.";
            $_SESSION['icono'] = "success";
        } else {
            // Si la consulta no se puede ejecutar
            session_start();
            $_SESSION['mensaje'] = "Error al eliminar el color.";
            $_SESSION['icono'] = "error";
        }

    } catch (mysqli_sql_exception $e) {
        // Capturar error por restricciones de clave foránea
        session_start();
        if ($e->getCode() == 1451) { // Código de error para "Cannot delete or update a parent row"
            $_SESSION['mensaje'] = "No se puede eliminar el color porque está relacionado con otros registros.";
        } else {
            $_SESSION['mensaje'] = "Error al eliminar el color: " . $e->getMessage();
        }
        $_SESSION['icono'] = "error";
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conexion->close();

    // Redirigir al index
    header('Location: ' . $URL . 'src/Color/index.php');
    exit();

} else {
    // Redirigir si no hay ID proporcionado
    header('Location: ' . $URL . 'src/Color/index.php');
    exit();
}
?>
