<?php
/*
=========================================================
ARCHIVO: descargar_txt.php
FUNCIÓN:
Permite descargar el archivo filtrado.txt
como archivo.txt en formato texto plano.
=========================================================
*/

$archivo = "filtrado.txt";

/*
Verifica que el archivo exista antes de intentar enviarlo.
*/
if (file_exists($archivo)) {

    /*
    header():
    Envía cabeceras HTTP para forzar descarga.
    */

    header("Content-Type: text/plain");
    header("Content-Disposition: attachment; filename=archivo.txt");
    header("Content-Length: " . filesize($archivo));

    /*
    readfile():
    Envía el contenido del archivo directamente al navegador.
    */
    readfile($archivo);
    exit();

} else {
    echo "El archivo no existe.";
}
?>