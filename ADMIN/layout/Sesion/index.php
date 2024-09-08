<?php
  session_start();
  if(isset($_SESSION['sesion_email'])){
      // echo "si existe sesion de ".$_SESSION['sesion_email'];
      $email_sesion = $_SESSION['sesion_email'];
      $SQL_EMPLEADO = "SELECT * FROM empleados AS  A
      INNER JOIN roles AS B ON B.PK_Rol = A.FK_Rol 
      INNER JOIN estados AS C ON C.PK_Estado = A.FK_Estado
      WHERE A.Correo_Empleado = '$email_sesion'";
      $Respuesta = $conexion->query($SQL_EMPLEADO);
      $Empleados_S = $Respuesta->fetch_assoc();

      $PK_Empleado = $Empleados_S['PK_Empleado'];
      $Nombres_Empleado = $Empleados_S['Nombres_Empleado'];
      $Apellidos_Empleado = $Empleados_S['Apellidos_Empleado'];
      $Correo_Empleado = $Empleados_S['Correo_Empleado'];
      $Contrasena_Empleado = $Empleados_S['Contrasena_Empleado'];
      $Telefono_Empleado = $Empleados_S['Telefono_Empleado'];
      $Direccion_Empleado = $Empleados_S['Direccion_Empleado'];
      $DNI_Empleado = $Empleados_S['DNI_Empleado'];
      $FK_Estado = $Empleados_S['FK_Estado'];
      $Rol = $Empleados_S['Nombre_Rol'];
      
  }else{
      echo "no existe sesion";
      header('Location: '.$URL.'src/Login/index.php');
  }
  
  
?>
