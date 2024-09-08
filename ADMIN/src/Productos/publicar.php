<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');
include('../../layout/Sesion/index.php');

$id_producto_color = $_GET['id'];

$SQL_IMAGENES = "SELECT * FROM imagenes WHERE FK_Producto = '$id_producto_color'";
$DATOS_IMAGENES = $conexion->query($SQL_IMAGENES); //PARA LA TABLA




?>


<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">

    <?php include('../../layout/Navegador/index.php'); ?>


        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Productos</h4>
                        <h6>Se requiere Fotos para Publicar</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="requiredfield">
                            <h4>
                                PUBLICAR PRODUCTO
                            </h4>
                        </div>


                        <form action="<?php echo $URL;?>app/controladores/Productos/publicar.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-4">




                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Imagen del Modelo Referencial</label>
                                        <div class="mb-3">
                                            <input id="imagen_1" name="imagen_1" type="file" class="form-control"
                                                aria-label="file example"
                                                required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>

                                    </div>
                                </div>
                             
                            

                                <input name="id_producto" type="hidden" value="<?php echo "$id_producto_color"; ?>">





                                <div class="col-lg-3 col-sm-6 col-12">
                                    <button type=" submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>



                        <!----->



                        <div class="table-responsive table-height">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>FOTO</th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>

                                <?php
                                $contador = 0;
                                while ($T = $DATOS_IMAGENES->fetch_assoc()) {
                                    $id_talla = $T['PK_Imagen'];
                                ?>




                                    <tbody>
                                        <tr>

                                            <td>

                                            <div>
                                                <a href="<?php echo $URL . "/app/Controladores/Productos/img/" . $T['Foto_Producto']; ?>" class="product-img glightbox" data-gallery="gallery1">
                                                    <img class="img-fluid" src="<?php echo $URL . "/app/Controladores/Productos/img/" . $T['Foto_Producto']; ?>" alt="product" />
                                                </a>
                                            </div>
                                            </td>

                                            <td class="text-start">
                                                <a class="delete-set"><img src="<?php echo $URL; ?>assets/img/icons/delete.svg" alt="img" /></a>
                                            </td>
                                        </tr>


                                    </tbody>


                                <?php
                                }
                                ?>




                            </table>
                        </div>

                        



                        <div class="row">

                            <div class="col-lg-12">

                                <a href="index.php" class="btn btn-cancel">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </div>

    <?php include('../../layout/Parte_002/index.php') ?>
    <?php include('../../layout/Mensaje/index.php') ?>

</body>

</html>


<div id="respuesta"></div>


<!--shif alt f -->