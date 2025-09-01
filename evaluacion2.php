<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de la Semana</title>
    <link rel="stylesheet" href="evaluacion.css">
</head>
<body>
    
<div class="container">
    <h2>Escribe un número del 1 al 7:</h2>
    <form action="" method="post">
        
        <label for="dia">Número</label><br>
        <input type="number" name="dia" min="1" max="7" required><br><br>

        <input type="submit" name="btnmostrar" value="Mostrar Día">
    </form> 
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST['dia'];
    $nombreDia = "";

    switch ($dia) {
        case "1":
            $nombreDia = "Lunes";
            break;
        case "2":
            $nombreDia = "Martes";
            break;
        case "3":
            $nombreDia = "Miércoles";
            break;
        case "4":
            $nombreDia = "Jueves";
            break;
        case "5":
            $nombreDia = "Viernes";
            break;
        case "6":
            $nombreDia = "Sábado";
            break;
        case "7":
            $nombreDia = "Domingo";
            break;
        default:
            $nombreDia = "Número inválido";
    }

    echo "<div class='resultado'>";
    echo "El día seleccionado es: <strong>$nombreDia</strong>";
    echo "</div>";
}
?>
</body>
</html>