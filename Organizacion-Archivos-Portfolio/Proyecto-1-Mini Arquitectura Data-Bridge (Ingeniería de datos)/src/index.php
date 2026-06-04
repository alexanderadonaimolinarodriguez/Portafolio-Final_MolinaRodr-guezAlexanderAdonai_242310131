<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Órdenes - Comida Mexicana</title>
    <style>

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #2a713a, #e3dbdb);
            margin: 0;
            padding: 0;

            /* Centrar todo vertical y horizontal */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* ocupa toda la altura de la ventana */
        }

        .contenedor {
            width: 400px;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.25);
            text-align: center;
        }

        .contenedor img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        h1 {
            color: #006847;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .mensaje {
            font-size: 14px;
            color: #444;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            text-align: left;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        input:focus, select:focus {
            border-color: #ff6f61;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button[type="submit"] {
            background: #ce1126;
            color: #fff;
        }

        button[type="submit"]:hover {
            background: #a50d1f;
        }

        button.secundario {
            background: #006847;
            color: #fff;
        }

        button.secundario:hover {
            background: #004d33;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <!-- Imagen decorativa -->
    <img src="menu.jpeg" 
    alt="Comida mexicana"
    style="width:400px; height:auto; border-radius:10px; margin-bottom:15px;">

    <h1>🌮 Buscar Órdenes</h1>
    <p class="mensaje">Haz tu búsqueda y encuentra tu orden favorita</p>

    <form action="procesar.php" method="POST">
        <label for="id">Buscar por ID:</label>
        <input type="text" name="id" placeholder="Ejemplo: 005">

        <label for="platillo">Buscar por Platillo:</label>
        <select name="platillo">
            <option value="">-- Seleccionar --</option>
            <option value="Tacos">Tacos</option>
            <option value="Gordas">Gordas</option>
            <option value="Tamales">Tamales</option>
            <option value="Enchiladas">Enchiladas</option>
            <option value="Quesadillas">Quesadillas</option>
        </select>

        <label for="mesero">Buscar por Mesero:</label>
        <select name="mesero">
            <option value="">-- Seleccionar --</option>
            <option value="Jahaziel">Jahaziel</option>
            <option value="Zenqu">Zenqu</option>
            <option value="Alex">Alex</option>
            <option value="Torres">Torres</option>
        </select>

        <label for="mesa">Buscar por Mesa:</label>
        <input type="number" name="mesa" min="1" max="15">

        <button type="submit">🔎 Buscar Orden</button>
    </form>

    <form action="mostrar_todas.php" method="POST">
        <button type="submit" class="secundario">📋 Mostrar Todas las Órdenes</button>
    </form>
</div>

</body>
</html>