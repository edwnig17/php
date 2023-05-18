<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="voltaje.php" method="post">

<label >Resistencia</label>
<input type="text" name="resistencia">
<label >Intesidad</label>
<input type="text" name="intensidad">
<input type="submit" value="send">
</form>
</body>
</html>

<?php

function calcularVoltaje($resistencia, $intensidad) {
    $voltaje = $resistencia * $intensidad;
    return $voltaje;
}

$resistencia = $_POST['resistencia']; 
$intensidad = $_POST['intensidad']; 

$voltaje = calcularVoltaje($resistencia, $intensidad);

echo "El voltaje del circuito es: $voltaje voltios.";
?>
