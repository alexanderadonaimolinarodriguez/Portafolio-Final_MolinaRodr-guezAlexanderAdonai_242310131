<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de Búsqueda</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>📊 Resultados de Órdenes</h1>

<?php
/*
=========================================================
ARCHIVO: resultados.php
FUNCIÓN:
Lee el archivo filtrado.txt,
parsea las líneas y genera una tabla dinámica HTML.
=========================================================
*/

if (file_exists("filtrado.txt")) {

    /*
    file():
    Lee todo el archivo y lo convierte en un arreglo
    donde cada posición es una línea.
    */
    $lineas = file("filtrado.txt");

    /*
    Si solo existe el encabezado,
    significa que no hubo coincidencias.
    */
    if (count($lineas) <= 1) {

        echo "<p style='color:red; font-weight:bold; text-align:center;'>
                ❌ Orden no encontrada.
              </p>";

    } else {

        /*
        Se resta 1 porque la primera línea
        corresponde al encabezado.
        */
        $total_resultados = count($lineas) - 1;

        echo "<p style='color:green; font-weight:bold; text-align:center;'>
                ✅ Se encontraron $total_resultados orden(es).
              </p>";

        /*
        Se construye una tabla HTML dinámica.
        */
        echo "<table border='1' width='100%'>";

        /*
        Se recorre cada línea del archivo.
        */
        foreach ($lineas as $linea) {

            /*
            explode divide cada línea usando "|"
            Esto es el proceso de parseo.
            */
            $datos = explode("|", trim($linea));

            echo "<tr>";

            foreach ($datos as $dato) {
                echo "<td>$dato</td>";
            }

            echo "</tr>";
        }

        echo "</table>";
    }

} else {

    echo "<p style='color:red; text-align:center;'>
            No existe el archivo de resultados.
          </p>";
}
?>

    <br>

    <!-- Botón para regresar -->
    <div style="text-align:center;">
        <a href="index.php">
            <button style="padding:10px; margin:5px;">⬅ Volver</button>
        </a>
    </div>

    <br>

    <!-- Explicación adicional -->
    <p style="text-align:center;">
        También puede consultar los resultados directamente desde el archivo plano generado por el sistema.
    </p>

    <!-- Botón que descarga archivo.txt -->
    <div style="text-align:center;">
        <a href="descargar_txt.php">
            <button style="background-color:#006847; color:white; padding:10px; border:none; cursor:pointer;">
                📄 Abrir resultados en archivo .txt
            </button>
        </a>
    </div>

</div>

</body>
</html>