<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<form action="estudiantes.php" method="post">

<label >Nota 1</label>
<input type="number" name="nota1">
<label >Nota 2</label>
<input type="number" name="nota2">
<label >Nota 3</label>
<input type="number" name="nota3">
<input type="submit" value="send">
</form>
<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

if ($promedio <= 3.9) {
    echo "Estudie";
} else {
    echo "Becado";
};



?>
