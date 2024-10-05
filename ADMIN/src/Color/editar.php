<?php
// Salir de la carpeta y entrar a config para la conexión y agarrar las propiedades
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');

include('../../layout/Sesion/index.php');
include('../../app/controladores/Color/index.php');


if (isset($_GET['id'])) {
    $PK_Color = intval($_GET['id']); // Asegúrate de convertirlo a entero

    // Ahora puedes usar $PK_Color en tu consulta SQL
    $SQL = "SELECT * FROM colores WHERE PK_Color = $PK_Color";
    $result = $conexion->query($SQL);


        $row = $result->fetch_assoc();
       
            // Accede a los valores
            $PK_Color = $row['PK_Color'];
            $Nombre_Color = $row['Nombre_Color'];

           
     
    
}



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
       
            
                <form action="<?php echo $URL; ?>app/controladores/Color/editar.php" method="post" enctype="multipart/form-data">

         

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="nombre_color">Nombre del Color</label>
                                <input id="nombre_color" name="NOMBRE_COLOR" type="text" class="form-control" value="<?php echo htmlspecialchars($Nombre_Color); ?>" placeholder="Ingrese el nombre del color" required />
                                <input type="hidden" name="PK_COLOR" value="<?php echo htmlspecialchars($PK_Color); ?>" /> <!-- Campo oculto para el ID -->
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

       
                   







    <?php include('../../layout/Parte_002/index.php'); ?>
    <?php include('../../layout/Mensaje/index.php'); ?>
    
</body>
</html>

<div id="respuesta"></div>




