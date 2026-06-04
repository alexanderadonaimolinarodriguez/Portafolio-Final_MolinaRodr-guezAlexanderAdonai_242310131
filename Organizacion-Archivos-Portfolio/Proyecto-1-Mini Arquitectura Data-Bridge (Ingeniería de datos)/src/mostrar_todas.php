<?php
/*
=========================================================
ARCHIVO: mostrar_todas.php
FUNCIÓN:
Copia el archivo maestro.txt completo
en filtrado.txt para mostrar todas las órdenes
sin aplicar ningún filtro.
=========================================================
*/

/*
copy():
Duplica el contenido del archivo maestro
en el archivo de resultados.
*/
copy("maestro.txt", "filtrado.txt");

/*
Redirige automáticamente a resultados.php
para mostrar la tabla.
*/
header("Location: resultados.php");
exit();
?>