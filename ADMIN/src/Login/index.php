<?php include ('../../config/conex.php');?>   
<?php include ('../../layout/Parte_001/index.php');

?>

<body class="account-page">


<?php
   session_name('session_admin');
    session_start();
    if(isset($_SESSION['mensaje'])){
        $respuesta = $_SESSION['mensaje']; ?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '<?php echo $respuesta;?>',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
    }
    ?>


                <style>
                  

                    .bordes {
                        border-radius: 15px;
                        
                    }
                    
                </style>

  <br>
  <br>
    <div class="main-wrapper bordes_1 ">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logos">
                            <!--AQUI EL LOGO --->
                        </div>
                        <hr>
                        <div class="login-userheading">
                            <h3>Login</h3>
                            
                        </div>
                        <form action="<?php echo $URL;?>/app/controladores/Login/ingresar.php" method="POST">
                            <div class="form-login">
                                <label>Usuario</label>
                                <div class="form-addons">
                                    <input type="email" name="Correo_Empleado" placeholder="Ingrese su correo" required>
                                    <img src="<?php echo $URL;?>assets/img/icons/mail.svg" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Contraseña</label>
                                <div class="pass-group">
                                    <input type="password" name="Contrasena_Empleado" class="pass-input" placeholder="Enter your password" required>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">Iniciar Sección</button>
                            </div>
                        </form>
                    </div>
                </div>
              
                <div class="login-img ">
                    <img class="bordes" src="<?php echo $URL;?>public/login_d.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>
    
<?php include ('../../layout/Parte_002/index.php');?>


  
</body>
</html>





