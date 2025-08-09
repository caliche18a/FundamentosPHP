<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
    $mensaje = '';

    switch ($estado) {
        case '0':
            echo $mensaje = 'Debes seleccionar un nivel del curso.';
            break;
        case '1':
            echo $mensaje = 'Recomendado para quienes recién empiezan en programación.';
            break;
        case '2':
            echo $mensaje = 'Recomendado para estudiantes con conocimientos intermedios de programación.';
            break;
        case '3':
            echo $mensaje = 'Recomendado para estudiantes con conocimientos avanzados de programación.';
            break;
        default:
            echo $mensaje = 'La opción seleccionada no es válida.';
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sin título</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="titulo">Estado del curso:</label>
        <select name="estado" id="estado">
            <option value="0"></option>
            <option value="1">Nivel Básico</option>
            <option value="2">Nivel Intermedio</option>
            <option value="3">Nivel Avanzado</option>
        </select>
        
        <input type="submit" value="Enviar">
    </form>

</body>
</html>