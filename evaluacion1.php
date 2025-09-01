<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel</title>
    <link rel="stylesheet" href="evaluacion.css">
</head>
<body>
    
<div class="container">
    <h2>Menu de opcion de matematicas:</h2>
    <form action="" method="post">
        
        <label for="txtn1">Numero 01</label>
        <input type="text" name="num1" placeholder="Escribe Numero" required>

        <label for="txtn2">Numero 02</label>
        <input type="text" name="num2" placeholder="Escribe Numero" required>

        <label for="operacion">Operación</label>
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>

        <input type="submit" name="btncalcular" value="Calcular">
    </form> 
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = "";

    if ($operacion == "sumar") {
        $resultado = $num1 + $num2;
    } else if ($operacion == "restar") {
        $resultado = $num1 - $num2;
    } else if ($operacion == "multiplicar") {
        $resultado = $num1 * $num2;
    } else if ($operacion == "dividir") {
        $resultado = $num1 / $num2; // sin mensaje de error
    } else {
        $resultado = "Operación no válida";
    }

    echo "<h3>Resultado: $resultado</h3>";
}
?>
</body>
</html>