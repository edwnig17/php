<!DOCTYPE html>
<html>
<head>
    <title>Calcular perímetro de un cuadrado o área de un rectángulo</title>
</head>
<body>
    <h1>Calcular perímetro de un cuadrado o área de un rectángulo</h1>
    <form method="post" action="valordelcuadrado.php">
        <label for="opcion">Seleccione una opción:</label>
        <select name="opcion" id="opcion">
            <option value="a">Calcular perímetro de un cuadrado</option>
            <option value="b">Calcular área de un rectángulo</option>
        </select>
        <br><br>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $opcion = $_POST['opcion'];

            if ($opcion === 'a') {
                $lado = $_POST['lado'];
                $perimetro = 4 * $lado;
                echo '<h2>El perímetro del cuadrado es: ' . $perimetro . 'cm</h2>';
            } elseif ($opcion === 'b') {
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura;
                echo '<h2>El área del rectángulo es: ' . $area .  'cm</h2>';
            }
        }
        ?>
        <div id="valores-cuadrado" style="display: none;">
            <label for="lado">Ingrese el valor del lado del cuadrado:</label>
            <input type="number" name="lado" id="lado">
        </div>
        <div id="valores-rectangulo" style="display: none;">
            <label for="base">Ingrese el valor de la base del rectángulo:</label>
            <input type="number" name="base" id="base">
            <br><br>
            <label for="altura">Ingrese el valor de la altura del rectángulo:</label>
            <input type="number" name="altura" id="altura">
        </div>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

<script src="valor.js"></script>
</body>
</html>
