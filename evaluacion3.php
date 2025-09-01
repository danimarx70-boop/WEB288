<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses y Estaciones</title>
    <link rel="stylesheet" href="evaluacion.css">
</head>
<body>
    
<div class="container">
    <h2>Escribe un número del 1 al 12:</h2>
    <form action="" method="post">
        
        <label for="mes">Número</label><br>
        <input type="number" name="mes" min="1" max="12" required><br><br>

        <input type="submit" name="btnmostrar" value="Mostrar Mes y Estación">
    </form> 
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mes = $_POST['mes'];
    $nombreMes = "";
    $estacion = "";

    switch ($mes) {
        case "1": $nombreMes = "Enero"; $estacion = "Verano"; break;
        case "2": $nombreMes = "Febrero"; $estacion = "Verano"; break;
        case "3": $nombreMes = "Marzo"; $estacion = "Verano"; break;
        case "4": $nombreMes = "Abril"; $estacion = "Otoño"; break;
        case "5": $nombreMes = "Mayo"; $estacion = "Otoño"; break;
        case "6": $nombreMes = "Junio"; $estacion = "Otoño"; break;
        case "7": $nombreMes = "Julio"; $estacion = "Invierno"; break;
        case "8": $nombreMes = "Agosto"; $estacion = "Invierno"; break;
        case "9": $nombreMes = "Septiembre"; $estacion = "Invierno"; break;
        case "10": $nombreMes = "Octubre"; $estacion = "Primavera"; break;
        case "11": $nombreMes = "Noviembre"; $estacion = "Primavera"; break;
        case "12": $nombreMes = "Diciembre"; $estacion = "Primavera"; break;
        default: $nombreMes = "Número inválido"; $estacion = "No existe";
    }

    echo "<h3>El mes es: $nombreMes <br>La estación en Perú es: $estacion</h3>";
}
?>
</body>
</html>