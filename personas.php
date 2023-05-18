<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>Ingresar datos de personas</h2>
    <form method="POST" action="personas.php">
        <label for="nombre1">Persona 1:</label>
        <input type="text" id="nombre1" name="nombre1" placeholder="Nombre" >
        <input type="number" id="edad1" name="edad1" placeholder="Edad" ><br><br>

        <label for="nombre2">Persona 2:</label>
        <input type="text" id="nombre2" name="nombre2" placeholder="Nombre" >
        <input type="number" id="edad2" name="edad2" placeholder="Edad" ><br><br>

        <label for="nombre3">Persona 3:</label>
        <input type="text" id="nombre3" name="nombre3" placeholder="Nombre" >
        <input type="number" id="edad3" name="edad3" placeholder="Edad" ><br><br>

        <input type="submit" value="Determinar persona con mayor edad">
    </form>
</body>
</html>

<?php
$personas = array();

for ($i = 1; $i <= 3; $i++) {
    $nombre = $_POST['nombre' . $i];
    $edad = $_POST['edad' . $i];
    $personas[] = array('nombre' => $nombre, 'edad' => $edad);
}

$personaMayor = '';
$edadMayor = 0;

foreach ($personas as $persona) {
    if ($persona['edad'] > $edadMayor) {
        $personaMayor = $persona['nombre'];
        $edadMayor = $persona['edad'];
    }
}

echo "La persona con mayor edad es: " . $personaMayor . ", con " . $edadMayor . " años.";
?>
