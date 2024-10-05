<?php
include ('../config/conex.php');
session_name('session_admin');
session_start();
echo 'hola';

if(isset($_SESSION['sesion_email'])){
    session_destroy();
    header('Location: '.$URL.'src/Login/index.php');
}

?>