<?php


if (isset($_SESSION['mensaje']) && isset($_SESSION['icono'])) {
    $respuesta = $_SESSION['mensaje'];
    $icono = $_SESSION['icono'];
    // Código para mostrar la alerta
    echo "<script>
        Swal.fire({
            position: 'top-end',
            icon: '$icono',
            title: '$respuesta',
            showConfirmButton: false,
            timer: 2500
        });
    </script>";

    // Limpiar las variables de sesión
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
}

?>