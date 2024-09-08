<?php

$SQL_TALLAS = "SELECT * FROM tallas AS A  WHERE A.FK_Estado NOT IN ('2','3')";
$DATOS_TALLAS = $conexion->query($SQL_TALLAS);

