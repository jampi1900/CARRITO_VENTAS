<?php
include("../../../config/conex.php");

$id_producto = $_POST['id_producto'];

// Procesar Imagen 1
$imagen_1 = $_FILES['imagen_1']['name'];
$temp_1  = $_FILES['imagen_1']['tmp_name'];
$nombreDelArchivo_1 = date("Y-m-d-H-i-s");
$nuevo_nombre_1 = $nombreDelArchivo_1 . "__" . $imagen_1;
move_uploaded_file($temp_1, 'img/' . $nuevo_nombre_1);

// Obtener la fecha y hora actual
$FECHA = date("Y-m-d H:i:s");

// Insertar la imagen en la tabla 'imagenes'
$SQL_IMG = "INSERT INTO `imagenes` (`Foto_Producto`, `FyH`, `FK_Producto`) VALUES ('$nuevo_nombre_1', '$FECHA', '$id_producto')";
$result = $conexion->query($SQL_IMG);

$COMPROBAR_CANTIDAD_PUBLICAR = "SELECT COUNT(*) AS total FROM imagenes WHERE FK_Producto = '$id_producto'";
$CAMBIO_ESTADO_PUBLICADO = $conexion->query($COMPROBAR_CANTIDAD_PUBLICAR);

// Verificar si la consulta fue exitosa
if ($CAMBIO_ESTADO_PUBLICADO) {
    // Obtener el resultado
    $fila = $CAMBIO_ESTADO_PUBLICADO->fetch_assoc();
    $cantidad_imagenes = $fila['total']; // Aquí obtienes la cantidad de registros
    if($cantidad_imagenes >= 4 ){
        // Cambiar el estado del producto a 'publicado' (8)
        $CAMBIO_ESTADO_POR_IMG = "UPDATE productos SET FK_Estado = 8 WHERE PK_Producto = $id_producto";
        $CAMBIO_CORECTO_IMG = $conexion->query($CAMBIO_ESTADO_POR_IMG);
    }
}

if ($result === TRUE) {

    session_start();
    $_SESSION['mensaje'] = "Se guardó de manera correcta";
    $_SESSION['icono'] = "success";
    ?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>src/Productos/publicar.php?id=" + encodeURIComponent(id_producto);
    </script>
    <?php
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>src/Productos/publicar.php?id=" + encodeURIComponent(id_producto);
    </script>
    <?php
}
?>
