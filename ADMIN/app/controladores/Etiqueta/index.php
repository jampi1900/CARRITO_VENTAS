<?php

$SQL_ETIQUETAS = "SELECT * FROM etiquetas AS C  WHERE C.FK_Estado NOT IN ('2','3')";
$DATOS_ETIQUETAS = $conexion->query($SQL_ETIQUETAS);
