<?php
// Salir de la carpeta y entrar a config para la conexión y agarrar las propiedades
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');

include('../../layout/Sesion/index.php');
include('../../app/controladores/Color/index.php');


?>

<!--SEESION OBTENER LUEGO MENSAJE LO MALO ES INICIAR SECION A UNA CONSULTA PARA GESTIONAR-->




<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>
    <div class="main-wrapper">
        <?php include('../../layout/Navegador/index.php'); ?>






        



        <div class="page-wrapper">
            <div class="content">





                <!-- Sección de Agregar Color -->
                <div class="page-header">
                    <div class="page-title">
                        <h4>Agregar Color</h4>
                        <h6>Crear un nuevo color</h6>
                    </div>
                </div>



                <!--USAMOS POST PARA ENVIAR LOS DATOS DE MANERA OCULTA-->
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo $URL; ?>app/controladores/Color/create.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="nombre_color">Nombre del Color</label>
                                        <input id="nombre_color" name="NOMBRE_COLOR" type="text" class="form-control" placeholder="Ingrese el nombre del color" required />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Guardar</button>
                                    <a href="index.php" class="btn btn-cancel">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>











                





                <!-- Sección de Lista de Colores -->
                <div class="page-header mt-4">
                    <div class="page-title">
                        <h4>Lista de Colores</h4>
                        <h6>Mostrando todos los Colores</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-input">
                                    <a class="btn btn-searchset">
                                        <img src="<?php echo $URL;?>assets/img/icons/search-white.svg" alt="img" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombre Color</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Verifica si hay datos antes de intentar mostrar
                                    if ($DATOS_COLORES) {
                                        $contador = 1; // Iniciar contador desde 1
                                        while ($M = $DATOS_COLORES->fetch_assoc()) {
                                            $PK_Color = $M['PK_Color'];
                                    ?>
                                            <tr>
                                                <td><?php echo $contador++; ?></td> <!-- Muestra el contador -->
                                                <td><?php echo htmlspecialchars($M['Nombre_Color']); ?></td>
                                                <td>
                                                  <a href="#" class="text-danger" onclick="confirmarEliminacion(<?php echo $PK_Color; ?>)">Eliminar</a>
                                                    <a href="editar.php?id=<?php echo $PK_Color; ?>" class="text-primary">Editar</a> <!-- Enlace a editar.php -->
                
                                                </td>
                                            </tr>
                                           
                            
                                    <?php


                                        }
                                    } else {
                                        echo "<tr><td colspan='3'>No hay colores registrados.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    
    </div>










    <?php include('../../layout/Parte_002/index.php'); ?>
    <?php include('../../layout/Mensaje/index.php'); ?>
    
</body>
</html>

<div id="respuesta"></div>




<!-- Modal de confirmación -->
<div class="modal fade" id="confirmarModal" tabindex="-1" role="dialog" aria-labelledby="confirmarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmarModalLabel">Confirmar Eliminación</h5>
    
      </div>
      <div class="modal-body">
        ¿Estás seguro de que deseas eliminar este color?
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
function confirmarEliminacion(id) {
    // Mostrar el modal de confirmación
    $('#confirmarModal').modal('show');

    // Cuando se confirme la eliminación, redirigir a Eliminar.php con el ID
    document.getElementById('btnEliminar').onclick = function () {
        window.location.href = '../../app/controladores/Color/eliminar.php?id=' + id;
    };
}
</script>



