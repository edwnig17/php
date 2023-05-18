<!DOCTYPE html>
<html>
<head>
    <title>Registro de Atletas </title>
</head>
<body>
    <h1>Registro de Atletas </h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="cantidad">Ingrese la cantidad de atletas finalistas:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br><br>
        <button type="submit">Registrar Atletas</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidad = $_POST['cantidad'];

        echo '<h2>Registro de Marcas</h2>';
        echo '<form method="post" action="">';

        for ($i = 1; $i <= $cantidad; $i++) {
            echo '<label for="atleta'.$i.'">Nombre de la Atleta '.$i.':</label>';
            echo '<input type="text" name="atleta'.$i.'" id="atleta'.$i.'" required>';
            echo '<br><br>';
            echo '<label for="marca'.$i.'">Marca de Salto de la Atleta '.$i.' (metros):</label>';
            echo '<input type="number" step="0.01" name="marca'.$i.'" id="marca'.$i.'" required>';
            echo '<br><br>';
        }

        echo '<input type="hidden" name="cantidad" value="'.$cantidad.'">';
        echo '<button type="submit">Calcular Resultado</button>';
        echo '</form>';
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atleta1'])) {
        $cantidad = $_POST['cantidad'];
        $record = 15.50;
        $campeona = '';
        $marcaCampeona = 0;
        $rompioRecord = false;

        for ($i = 1; $i <= $cantidad; $i++) {
            $atleta = $_POST['atleta'.$i];
            $marca = $_POST['marca'.$i];

            if ($marca > $marcaCampeona) {
                $campeona = $atleta;
                $marcaCampeona = $marca;
            }

            if ($marca > $record) {
                $rompioRecord = true;
            }
        }

        echo '<h2>Resultado</h2>';
        echo '<p>La atleta campeona es: ' . $campeona . '</p>';

        if ($rompioRecord) {
            echo '<p>¡Rompió el récord! Recibirá un pago de 500 millones.</p>';
        } else {
            echo '<p>No rompió el récord.</p>';
        }
    }
    ?>
</body>
</html>
