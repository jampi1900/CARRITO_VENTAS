<?php
include("../../../config/conex.php");
$id_talla = $_POST['id_talla'];
$cantidad = $_POST['cantidad_talla'];
$id_producto = $_POST['id_producto'];


// Query to check if the combination of FK_Talla and FK_Det_Color already exists
$sql_check = "SELECT * FROM det_talla WHERE FK_Talla = '$id_talla' AND FK_Producto = '$id_producto'";
$result_check = $conexion->query($sql_check);

$row = $result_check->fetch_assoc();
$stock = $row['Stock'];

$cantidad = $cantidad + $stock;


$sql_det_talla = "UPDATE det_talla SET Stock = $cantidad WHERE FK_Talla = '$id_talla' AND FK_Producto = '$id_producto'";
$result = $conexion->query($sql_det_talla);

if ($result === TRUE) {
    session_start();
    $_SESSION['mensaje'] = "Se guardó de manera correcta";
    $_SESSION['icono'] = "success";
?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>src/Productos/inventario.php?id=" + encodeURIComponent(id_producto);
    </script>
<?php
} else {
    session_start();
    $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
    $_SESSION['icono'] = "error";
?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>src/Productos/inventario.php?id=" + encodeURIComponent(id_producto);
    </script>
<?php
}

?>