<?php

$SQL_CATEGORIAS= "SELECT * FROM categorias AS A  WHERE A.FK_Estado NOT IN ('2','3')";
$DATOS_CATEGORIAS = $conexion->query($SQL_CATEGORIAS);

