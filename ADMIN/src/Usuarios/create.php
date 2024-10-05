

<?php 
include('../../config/conex.php');
include('../../layout/Parte_001/index.php');
include('../../layout/Sesion/index.php');

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
              <h4>Crear Usuarios</h4>
              <h6></h6>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Nombre Empleado</label>
                    <input type="text" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Apellido de Empleado</label>
                    <input type="text" />
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Correo de Empleado</label>
                    <input type="text" />
                  </div>
                </div>

                 
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Contrasena Empleado</label>
                    <input type="text" />
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Telefono Empleado</label>
                    <input type="text" />
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Direccion Empleado</label>
                    <input type="text" />
                  </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="form-group">
                    <label>DNI</label>
                    <input type="text" />
                  </div>
                </div>
              








                <div class="col-lg-12">
                  <a href="javascript:void(0);" class="btn btn-submit me-2"
                    >Submit</a
                  >
                  <a href="javascript:void(0);" class="btn btn-cancel"
                    >Cancel</a
                  >
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


