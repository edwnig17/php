<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="numeroparoimpar.php" method="post">
<label >Numero</label>
<input type="number" name="numero">
<input type="submit" value="send">
</form>
<?php



$numero = $_POST['numero'];

if (($numero % 2 == 0)) {
    echo "El número $numero es par.";
} else {
    echo "El número $numero es impar.";
}

echo "<br>";

if (($numero > 10)) {
    echo "El número $numero es mayor que 10.";
} else {
    echo "El número $numero no es mayor que 10.";
}
?>

</body>
</html>