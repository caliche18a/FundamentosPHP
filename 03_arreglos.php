<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $frutas = isset($_POST['frutas']) ? $_POST['frutas'] : '';
    $mensaje = '';

    if (!empty($frutas)) {
        $listaFrutas = explode(',', $frutas);
        $mensaje = 'Las frutas ingresadas son: ' . implode(', ', array_map('trim', $listaFrutas));
    } else {
        $mensaje = 'No se ingresaron frutas.';
    }

    echo $mensaje;
    echo '<br>';
    echo var_dump($listaFrutas);
    echo '<br>';
    //Imprimir únicamente la fruta en la posición 2 y última posición
    if (isset($listaFrutas[1])) {
        echo 'Fruta en la posición 2: ' . $listaFrutas[1] . '<br>';
    } else {
        echo 'No hay fruta en la posición 2.<br>';
    }

    if (!empty($listaFrutas)) {
        echo 'Última fruta: ' . end($listaFrutas) . '<br>';
    } else {
        echo 'No hay frutas para mostrar la última.<br>';
    }
    //Imprimir la cantidad de frutas ingresadas
    echo 'Cantidad de frutas ingresadas: ' . count($listaFrutas) . '<br>';
    
    
    //Imprimir la lista de frutas con la primera letra en mayúscula
    $listaFrutasCapitalizadas = array_map('ucfirst', $listaFrutas);
    echo 'Lista de frutas con la primera letra en mayúscula: ' . implode(', ', $listaFrutasCapitalizadas) . '<br>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="frutas">Ingrese frutas:</label>
        <input type="text" name="frutas" id="frutas" placeholder="Ejemplo: manzana, naranja, plátano">
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>

