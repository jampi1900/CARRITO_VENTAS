<?php

$SQL_PRODUCTOS = "SELECT * FROM productos AS E 
INNER JOIN marcas AS B ON E.FK_Marca = B.PK_Marca  
INNER JOIN categorias AS C ON E.FK_Categoria = C.PK_Categoria 
INNER JOIN estados AS D ON E.FK_Estado = D.PK_Estado
INNER JOIN colores AS F ON F.PK_Color = E.FK_Color
INNER JOIN etiquetas AS G ON G.PK_Etiqueta = E.FK_Etiqueta
WHERE E.FK_Estado <>  '3'"; // ELIMINADO
$DATOS_PRODUCTOS = $conexion->query($SQL_PRODUCTOS);



$SQL_PRODUCTOS_T = "SELECT * FROM productos AS E 
INNER JOIN marcas AS B ON E.FK_Marca = B.PK_Marca  
INNER JOIN categorias AS C ON E.FK_Categoria = C.PK_Categoria 
INNER JOIN estados AS D ON E.FK_Estado = D.PK_Estado
INNER JOIN colores AS F ON F.PK_Color = E.FK_Color
INNER JOIN etiquetas AS G ON G.PK_Etiqueta = E.FK_Etiqueta
WHERE E.FK_Estado =  '8' "; // ELIMINADO
$DATOS_PRODUCTOS_T = $conexion->query($SQL_PRODUCTOS_T);