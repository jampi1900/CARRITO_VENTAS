<?php
include('../../../config/conex.php');

// Obtener los datos del formulario
$Nombre_Producto = $_POST['Nombre_Producto'];
$SKU = $_POST['SKU'];
$Precio_Producto = $_POST['Precio_Producto'];
$Precio_Oferta = $_POST['Precio_Oferta'];
$Descripcion = $_POST['Descripcion'];
$FK_Etiqueta = $_POST['FK_Etiqueta'];
$FK_Color = $_POST['FK_Color'];
$FK_Categoria = $_POST['FK_Categoria'];
$FK_Marca = $_POST['FK_Marca'];

$imagen = $_FILES['imagen']['name'];
$temp  = $_FILES['imagen']['tmp_name'];

// Generar un nuevo nombre para la imagen
$nombreDelArchivo = date("Y-m-d-H-i-s"); // Cambié la 'h' minúscula por 'H' para la hora en formato 24 horas
$nuevo_nombre = $nombreDelArchivo . "__" . $imagen;
move_uploaded_file($temp, 'img/' . $nuevo_nombre);

// Obtener la fecha y hora actual
$FECHA = date("Y-m-d H:i:s");

// Inserción en la tabla 'productos'
$sql_insert_producto = "INSERT INTO productos 
(SKU, Nombre_Producto, PORTADA, Precio_Producto, Precio_Oferta, 
Descripcion, FyH, FK_Etiqueta, FK_Color, FK_Estado, FK_Categoria, FK_Marca) 
VALUES 
('$SKU', '$Nombre_Producto', '$nuevo_nombre', $Precio_Producto, $Precio_Oferta, 
'$Descripcion', '$FECHA', $FK_Etiqueta, $FK_Color, 1, $FK_Categoria, $FK_Marca)";

// Ejecutar la consulta
$result = $conexion->query($sql_insert_producto);

if ($result === TRUE) {
    session_start();
    $_SESSION['mensaje'] = "Se guardó de manera correcta";
    $_SESSION['icono'] = "success";
?>
    <script>
        location.href = "<?php echo $URL; ?>src/Productos/create.php";
    </script>
<?php
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
?>
    <script>
        location.href = "<?php echo $URL; ?>src/Productos/create.php";
    </script>
<?php
}
?>
