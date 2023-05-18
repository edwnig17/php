<!DOCTYPE html>
<html>
<head>
    <title>Registro de Estudiantes</title>
</head>
<body>
    <h2>Registro de Estudiantes</h2>
    <form method="POST" action="cantidaddeestudiantes.php">
        <label for="totalEstudiantes">Número de estudiantes:</label>
        <input type="number" id="totalEstudiantes" name="totalEstudiantes" requerido><br><br>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $totalEstudiantes = $_POST["totalEstudiantes"];

            for ($i = 1; $i <= $totalEstudiantes; $i++) {
                echo "<h3>Estudiante $i</h3>";
                echo "<label for='nombre$i'>Nombre:</label>";
                echo "<input type='text' id='nombre$i' name='nombre[]' requerido><br><br>";
                echo "<label for='sexo$i'>Sexo (M/F):</label>";
                echo "<input type='text' id='sexo$i' name='sexo[]' requerido><br><br>";
                echo "<label for='nota$i'>Nota definitiva:</label>";
                echo "<input type='number' id='nota$i' name='nota[]' step='0.01' requerido><br><br>";
            }
        }
        ?>  

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreEstudiantes = $_POST["nombre"];
        $sexoEstudiantes = $_POST["sexo"];
        $notaEstudiantes = $_POST["nota"];

        $totalEstudiantes = count($nombreEstudiantes);
        $mayorNota = $notaEstudiantes[0];
        $menorNota = $notaEstudiantes[0];
        $estudianteMayorNota = $nombreEstudiantes[0];
        $estudianteMenorNota = $nombreEstudiantes[0];
        $totalHombres = 0;
        $totalMujeres = 0;

        for ($i = 0; $i < $totalEstudiantes; $i++) {
            $nombre = $nombreEstudiantes[$i];
            $sexo = strtolower($sexoEstudiantes[$i]);
            $nota = $notaEstudiantes[$i];

            if ($nota > $mayorNota) {
                $mayorNota = $nota;
                $estudianteMayorNota = $nombre;
            }

            if ($nota < $menorNota) {
                $menorNota = $nota;
                $estudianteMenorNota = $nombre;
            }

            if ($sexo === 'm') {
                $totalHombres++;
            } elseif ($sexo === 'f') {
                $totalMujeres++;
            }
        }

        echo "<h2>Resultados</h2>";
        echo "Estudiante con la mayor nota: $estudianteMayorNota (Nota: $mayorNota)<br>";
        echo "Estudiante con la menor nota: $estudianteMenorNota (Nota: $menorNota)<br>";
        echo "Total de hombres: $totalHombres<br>";
        echo "Total de mujeres: $totalMujeres<br>";
    }
    ?>
</body>
</html>
