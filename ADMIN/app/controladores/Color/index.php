<?php

$SQL_COLORES = "SELECT * FROM colores AS A  WHERE A.FK_Estado NOT IN ('2','3')";
$DATOS_COLORES = $conexion->query($SQL_COLORES);

