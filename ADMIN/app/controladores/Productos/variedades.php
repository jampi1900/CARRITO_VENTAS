<?php
include("../../../config/conex.php");

$id_talla = $_POST['id_talla'];
$id_producto = $_POST['id_producto'];



$sql_check = "SELECT * FROM det_talla WHERE FK_Talla = '$id_talla' AND FK_Producto = '$id_producto'";
$result_check = $conexion->query($sql_check);

if ($result_check->num_rows > 0) {
    // If record exists, set an error message
    session_start();
    $_SESSION['mensaje'] = "Error: La talla ya existe para este producto.";
    $_SESSION['icono'] = "error";
?>
    <script>
        var id_producto = "<?php echo $id_producto; ?>";
        location.href = "<?php echo $URL; ?>src/Productos/variedad.php?id=" + encodeURIComponent(id_producto);
    </script>
    <?php
} else {
    // If record does not exist, insert new record
    $sql_det_talla = "INSERT INTO det_talla (Stock, FK_Talla, FK_Producto)
    VALUES (0, '$id_talla', '$id_producto')";
    $result = $conexion->query($sql_det_talla);

    if ($result === TRUE) {
        session_start();
        $_SESSION['mensaje'] = "Se guardó de manera correcta";
        $_SESSION['icono'] = "success";
    ?>
        <script>
            var id_producto = "<?php echo $id_producto; ?>";
            location.href = "<?php echo $URL; ?>src/Productos/variedad.php?id=" + encodeURIComponent(id_producto);
        </script>
    <?php
    } else {
        session_start();
        $_SESSION['mensaje'] = "Error: no se pudo registrar en la base de datos";
        $_SESSION['icono'] = "error";
    ?>
        <script>
            var id_producto = "<?php echo $id_producto; ?>";
            location.href = "<?php echo $URL; ?>src/Productos/variedad.php?id=" + encodeURIComponent(id_producto);
        </script>
<?php
    }
}
?>