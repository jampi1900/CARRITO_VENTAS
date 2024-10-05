<?PHP



require('../../../config/conex.php');

session_name('session_admin'); // Necesario 


$PK_COLOR = intval($_POST['PK_COLOR']); // Convierte el valor a entero
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
    $sql_check = "SELECT COUNT(*) as TOTAL FROM colores WHERE Nombre_Color = '$NOMBRE_COLOR'";
    $result =  $conexion->query($sql_check);
    $row = $result->fetch_assoc();
    $count = $row['TOTAL'];


        if ($count > 0) {
            // Si el nombre ya existe
            session_start();
            $_SESSION['mensaje'] = "El nombre del color ya está registrado"; // Mensaje de error
            $_SESSION['icono'] = "error"; // Icono de error
          
            header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
            exit();
        }



// Actualizar
$sql = "UPDATE colores SET Nombre_Color = ? WHERE PK_Color = ?";
$stmt = $conexion->prepare($sql); // Preparar la consulta

if ($stmt) { // Verifica si la preparación fue exitosa
    $stmt->bind_param('si', $NOMBRE_COLOR, $PK_COLOR); // 's' para string (Nombre_Color), 'i' para entero (PK_Color)

    if ($stmt->execute()) {
        session_start();
        // Si la actualización fue exitosa
        $_SESSION['mensaje'] = "Registro actualizado correctamente."; // Mensaje de éxito
        $_SESSION['icono'] = "success"; // Icono de éxito
    } else {
        session_start();
        // Si hay un error en la actualización
        $_SESSION['mensaje'] = "Error al actualizar el registro: " . $stmt->error; // Mensaje de error
        $_SESSION['icono'] = "error"; // Icono de error
    }

    // Cerrar la declaración
    $stmt->close(); 
} else {
    // Manejo de error si la preparación falla
    session_start();
    $_SESSION['mensaje'] = "Error al preparar la consulta: " . $conexion->error; // Mensaje de error
    $_SESSION['icono'] = "error"; // Icono de error
}

$conexion->close(); // Cerrar conexión
header('Location: ' . $URL . 'src/Color/index.php'); // Redirigir al index
exit();

      




?>