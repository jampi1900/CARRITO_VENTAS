<?php
//Saliendo de la carpeta y entrando a config para la conexcion y agarrado las propiedades
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');
include('../../layout/Sesion/index.php');
//marca etiqueta  color
include('../../app/controladores/Color/index.php');
include('../../app/controladores/Etiqueta/index.php');
include('../../app/controladores/Marca/index.php');
include('../../app/controladores/Categoria/index.php');
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
                        <h4>Product Add</h4>
                        <h6>Create new product</h6>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <form action="<?php echo $URL; ?>app/controladores/Productos/create.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Nombre Producto</label> <!--Modelo-->
                                        <input id="nombre_modelo" name="Nombre_Producto" type="text" placeholder="Ingrese el modelo" />
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        <select name="FK_Categoria" id="id_categoria" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una marca" -->
                                            <option value="" disabled selected>Seleccione una categoria</option>
                                            <?php
                                            foreach ($DATOS_CATEGORIAS as $CATEGORIAS) { ?>
                                                <option value="<?php echo $CATEGORIAS['PK_Categoria']; ?>" data-nombre="<?php echo $CATEGORIAS['Nombre_Categoria']; ?>">
                                                    <?php echo  $CATEGORIAS['Nombre_Categoria']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="">Marca</label>
                                        <select name="FK_Marca" id="id_marca" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una marca" -->
                                            <option value="" disabled selected>Seleccione una marca</option>
                                            <?php
                                            foreach ($DATOS_MARCAS as $MARCAS) { ?>
                                                <option value="<?php echo $MARCAS['PK_Marca']; ?>" data-nombre="<?php echo $MARCAS['Nombre_Marca']; ?>">
                                                    <?php echo $MARCAS['Nombre_Marca']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>



                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="id_etiqueta">Etiqueta</label>
                                        <select name="FK_Etiqueta" id="id_etiqueta" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una etiqueta" -->
                                            <option value="" disabled selected>Seleccione una etiqueta</option>
                                            <?php foreach ($DATOS_ETIQUETAS as $ETIQUETAS) { ?>
                                                <option value="<?php echo $ETIQUETAS['PK_Etiqueta']; ?>" data-nombre="<?php echo $ETIQUETAS['Nombre_Etiqueta']; ?>">
                                                    <?php echo $ETIQUETAS['Nombre_Etiqueta']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>





                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Precio_Producto">Precio</label>
                                        <input name="Precio_Producto" id="precio" class="form-control" type="number" required />
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="precio_oferta">Precio Oferta</label>
                                        <input name="Precio_Oferta" id="precio_oferta" class="form-control" type="number" />
                                    </div>
                                </div>



                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="id_color">Color</label>
                                        <select name="FK_Color" id="id_color" class="form-control yselect" required>
                                            <!-- Placeholder de "Seleccione una etiqueta" -->
                                            <option value="" disabled selected>Seleccione una Color</option>
                                            <?php foreach ($DATOS_COLORES as $COLORES) { ?>
                                                <option value="<?php echo $COLORES['PK_Color']; ?>" data-nombre="<?php echo $COLORES['Nombre_Color']; ?>">
                                                    <?php echo $COLORES['Nombre_Color']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="SKU">SKU</label>
                                        <input name="SKU" id="SKU" class="form-control" type="text" />
                                    </div>
                                </div>



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="imagen">Portada</label>
                                        <div class="mb-3">
                                            <input id="imagen" name="imagen" type="file" class="form-control" aria-label="file example" required />
                                            <div class="invalid-feedback">
                                                Example invalid form file feedback
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <b></b>
                                <b></b>
                                <b></b>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea name="Descripcion" id="summernote"></textarea>
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
            </div>
        </div>




    </div>


    
    <?php include('../../layout/Parte_002/index.php') ?>
    <?php include('../../layout/Mensaje/index.php') ?>

</body>

</html>



<!--chif alt f -->


<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200
        });
    });
</script>