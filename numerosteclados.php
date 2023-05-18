<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con dos números</title>
</head>
<body>
    <h2>Ingresar dos números</h2>
    <form method="POST" action="numerosteclados.php">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" ><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" ><br><br>

        <input type="submit" value="Realizar operaciones">
    </form>
</body>
</html>
<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero1 = floatval($numero1);
$numero2 = floatval($numero2);
if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $diferencia = $numero1 - $numero2;
    echo "La suma de los números es: " . $suma . "<br>";
    echo "La diferencia de los números es: " . $diferencia . "<br>";
} else {
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "El producto de los números es: " . $producto . "<br>";
    echo "La división de los números es: " . $division . "<br>";
}
?>
