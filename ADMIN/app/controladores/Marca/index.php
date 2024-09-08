<?php

$SQL_MARCAS = "SELECT * FROM marcas AS B WHERE B.FK_Estado NOT IN ('2','3')";
$DATOS_MARCAS = $conexion->query($SQL_MARCAS);
