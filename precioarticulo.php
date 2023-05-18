<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Generador de Factura</title>
</head>
<body>
    <h1>Generador de Factura</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre del artículo:</label>
        <input type="text" id="nombre" name="nombre" requerido><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" requerido><br><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" requerido><br><br>

        <input type="submit" value="Generar factura">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        // Calcular el total
        $total = $precio * $cantidad;

        // Mostrar la factura
        echo "<h2>Factura</h2>";
        echo "<p>Nombre del artículo: " .$nombre. "</p>";
        echo "<p>Precio: $" .$precio. "</p>";
        echo "<p>Cantidad: " .$cantidad. "</p>";
        echo "<p>Total a pagar: $" .$total. "</p>";
    }
    ?>

 
</body>
</html>

</body>
</html>